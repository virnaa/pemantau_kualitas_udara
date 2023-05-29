#include <DHT.h>
#define DHTPIN 5     
#define DHTTYPE DHT11
 
float VRLmq135;
float SensorValueMQ135;
float VRLmq7;
float SensorValueMQ7;
int pinLED = 4;
int pinGP2Y = A2;
int samplingTime = 280;
int sleepTime = 100;
DHT dht(DHTPIN, DHTTYPE);

float co, no2;
void setup() {
  Serial.begin(9600);
  pinMode(pinLED,OUTPUT);
  dht.begin();   
 }

void loop() {
    long RL = 1000;
    long Ro = 830;
    long RLmq135 = 1000;
    long Romq135 = 830;

    //suhu
    float t = dht.readTemperature();
     if (isnan(t)) {
    Serial.println("Periksa konfigurasi pin/kabelnya");
    Serial.println("Sensor tidak terbaca");
    return;  
  }

    //co
    SensorValueMQ7 = analogRead(A0);
    VRLmq7 = SensorValueMQ7/1024*5.0;
    float Rsmq7 = (5.00 * RL / VRLmq7) - RL;
    co = 100 * pow(Rsmq7 / Ro,-1.53);

    //no2
    SensorValueMQ135 = analogRead(A1);
    VRLmq135 = SensorValueMQ135/1024*5.0;
    float Rsmq135 = (5.00 / VRLmq135 - 1) * RLmq135;
     no2 = 24.977 * pow(Rsmq135 / Romq135,-0.293); 

    //debu
    digitalWrite(pinLED,LOW);
    delayMicroseconds(samplingTime);         
    float voMeasured = analogRead(pinGP2Y); 
    digitalWrite(pinLED,HIGH);
    delayMicroseconds(sleepTime);
        
    float calcVoltage = ((voMeasured *5.0)/1024);  
      float dustDensity = (0.17 * calcVoltage - 0.1)*1000; // dalam ug/m3

        
      if (dustDensity < 0){
        dustDensity = 0;
        }

    String data =String(t)+ "#" + String(co)+"#"+String(no2)+"#"+String(dustDensity);
    Serial.println(data);
    
    delay(5000);
}
