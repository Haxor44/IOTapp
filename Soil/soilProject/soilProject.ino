//Arduino Code - Soil Moisture
#include <ESP8266WiFi.h>
 
    //  Enter your Write API key from ThingSpeak
 
const char *ssid =  "KABU";     // replace with your wifi ssid and wpa2 key
const char *pass =  "";
const char* server = "soilapp.herokuapp.com";
WiFiClient client;
int Moisture_signal = A0; //Define the Analog pin# on the Arduino for the soil moisture sensor signal

void setup() {
  Serial.begin(9600); // Start the serial communication
  Serial.println("Connecting to ");
       Serial.println(ssid);
 
        //cONNECTING TO WIFI      
       WiFi.begin(ssid, pass);
 
      while (WiFi.status() != WL_CONNECTED) 
     {
            delay(500);
            Serial.print(".");
     }
      Serial.println("");
      Serial.println("WiFi connected");
}

void loop() {
  
   int Moisture = analogRead(Moisture_signal);  
  float moisture_percentage = (100 -((Moisture/1023.00)*100));
    
  Serial.println(" is:");
  Serial.print(Moisture);
  delay(200);
    String num = "20";
           if (client.connect(server,80))   //   
              {  
                            
                    postStr +="data=";
                    postStr +=String(moisture_percentage);
                    postStr += "\r\n\r\n";
 
                    client.print("POST /iot.php HTTP/1.1\n");
                    client.print("Host:soilapp.herokuapp.com\n");
                    client.print("Connection: close\n");
                    client.print("Content-Type: application/x-www-form-urlencoded\n");
                    client.print("Content-Length: ");
                    client.print(postStr.length());
                    client.print("\n\n");
                    client.print(postStr);
                   	Serial.println("%. Send to soilapp.");
            }
          client.stop();
 
          Serial.println("Waiting...");
  
 
  delay(2000);
  
}
//Function to get soil moisture

