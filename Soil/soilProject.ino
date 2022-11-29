//Arduino Code - Soil Moisture

int Moisture_signal = A0; //Define the Analog pin# on the Arduino for the soil moisture sensor signal

void setup() {
  Serial.begin(9600); // Start the serial communication
}

void loop() {
   int Moisture = analogRead(Moisture_signal);  
  float moisture_percentage = (100 -((Moisture/1023.00)*100));
    
  Serial.println(" is:");
  Serial.print(Moisture);
  delay(200);
}
//Function to get soil moisture
void soil(){
 
  
}
