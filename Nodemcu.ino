
#include <WiFiClient.h>

#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h>

#include <SoftwareSerial.h>

SoftwareSerial DataSerial(12, 13);

unsigned long previousMillis = 0;
const long interval = 5000;

const char* ssid = "Risoles";
const char* pass = "enaksekali";

const char* host = "monitoring-kualitasudara.000webhostapp.com";

String arrData[4];  //2 sensor

void setup() {
  Serial.begin(9600);
  DataSerial.begin(9600);
  
WiFi.begin(ssid, pass);
Serial.println("Connecting...");
while (WiFi.status() != WL_CONNECTED)
{
  Serial.print("..");
  delay(500);
  }
  Serial.println("Connected");
}



void loop() {
 
  unsigned long currentMillis = millis();
  if(currentMillis - previousMillis >= interval)
  {
  previousMillis = currentMillis;  
  
  float suhu, co, no2, debu;
  String data  = "";

  //baca data yang diterima
  while(DataSerial.available()>0)
  {
    data += char (DataSerial.read());
  }

  //membuang spasi data
  data.trim();  

  if (data!= "")
  {
  
  int index = 0;  
  for(int i=0; i<data.length(); i++)
    {
    char delimiter = '#';  //pemisah
    if(data[i] != delimiter)
      arrData[index] += data[i];
    else
      index++;
   }
   
   if (index == 3)
   {
//  //tampilkan di serial monitor
  Serial.println("Suhu : " + arrData[0]);
  Serial.println("CO : " + arrData[1]);
  Serial.println("NO2 : " + arrData[2]);
  Serial.println("Debu : " + arrData[3]);
  Serial.println();
  }

 
  suhu = arrData[0].toFloat();
  co = arrData[1].toFloat();
  no2 = arrData[2].toFloat();
  debu = arrData[3].toFloat();

  arrData[0]="";
  arrData[1]="";
  arrData[2]="";
  arrData[3]="";
  
  WiFiClient client;
  const int httpPort = 80;
     if(!client.connect(host, httpPort))
     {
      Serial.println("Connection Failed");
      return;
     }

     String Link;
     HTTPClient http;
     Link = "http://" + String(host) + "/kirimdata.php?suhu="+String(suhu) + "&co=" +String(co) + "&no2=" +String(no2) + "&debu=" +String(debu);
     http.begin(client, Link);
     http.GET();

     String respon = http.getString();
     Serial.println(respon);
     http.end();
  }
}
}
  
