import 'package:flutter/material.dart';

enum RequestType{Post, Get, PostWithAuth, GetWitAuth}

class ApiUtil{
  //config
  static const String IP_ADDRESS = "skielstore.herryprasetyo.my.id";
  static const String DefaultPage = "rest/bootstrap";
  static const String BASE_URL = "https://" + IP_ADDRESS + "/" + DefaultPage; 

  //response 200, 404, 500

  //header
}