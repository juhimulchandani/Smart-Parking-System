#include<WiFi.h>
#include<HTTPClient.h> 
const char* ssid = "aniket";
const char* password =  "12345678"; 
int trig1=16;
int echo1=17;
int trig2=12;
int echo2=14;
long distance1=0;
long distance2=0;
long pulseTime=0;
int count1=0;
int count2=0;
int flag=0;
void setup(){
  Serial.begin(115200); 
  WiFi.begin(ssid,password);
  while(WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.println("Connecting to WiFi..");
  }
  Serial.println("Connected to the WiFi network");
  pinMode(trig1,OUTPUT);
  pinMode(trig2,OUTPUT);
  pinMode(echo1,INPUT);
  pinMode(echo2,INPUT);

}

void loop() {
  sonarOne(trig1,echo1);
  delay(1000);
  sonarTwo(trig2,echo2);
}

void sonarOne(int trig1,int echo1){
  Serial.println("called");
  digitalWrite(trig1,LOW);
  delayMicroseconds(2);
  digitalWrite(trig1,HIGH);
  delayMicroseconds(10);
  digitalWrite(trig1,LOW);
  pulseTime = pulseIn(echo1,HIGH);
  distance1 = pulseTime/29/2;
  if(distance1>0){
    count1++;
  Serial.println("Distance 1 Down Sonar "+(String)distance1);
  }
}
  
void sonarTwo(int trig2,int echo2){
  digitalWrite(trig2,LOW);
  delayMicroseconds(2);
  digitalWrite(trig2,HIGH);
  delayMicroseconds(10);
  digitalWrite(trig2,LOW);
  pulseTime = pulseIn(echo2,HIGH);
  distance2 = pulseTime/29/2;
  if(distance2>0){
      count2++;
      Serial.println("Distance2 "+(String)distance2);
  }
}
