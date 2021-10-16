import 'package:flutter/material.dart';

enum RequestType { Post, Get, PostWithAuth, GetWithAuth }

class ApiUtil {
  //config
  static const String IP_ADDRESS = "skielstore.herryprasetyo.my.id";
  static const String DefaultPage = "rest/bootstrap";
  static const String BASE_URL = "https://" + IP_ADDRESS + "/" + DefaultPage;

  static const String MAIN_API_URL_DEV = BASE_URL;

  //url production 
  static const String MAIN_API_URL = MAIN_API_URL_DEV;

  static const String RegisterPage = "rest/register";

  static const String CategoryProduct = "/rest/categoryProducts";
  //login 
  static const String AUTH_LOGIN = 'rest/login';
  //response 200, 404, 500
  static const int SUCCESS_CODE = 200;
  static const int ERROR_CODE = 400;
  static const int UNAUTHORIZED_CODE = 401;

  //Custom codes
  static const int INTERNET_NOT_AVAILABLE_CODE = 500;
  static const int SERVER_ERROR_CODE = 501;
  static const int MAINTENANCE_CODE = 503;

  //------------------ Header ------------------------------//

  static Map<String, String> getHeader(
      {RequestType requestType = RequestType.Get, String token = ""}) {
    switch (requestType) {
      case RequestType.Post:
        return {
          "Accept": "application/json",
          "Content-type": "application/json"
        };
      case RequestType.Get:
        return {
          "Accept": "application/json",
        };
      case RequestType.PostWithAuth:
        return {
          "Accept": "application/json",
          "Content-type": "application/json",
          "Authorization": "Bearer " + token
        };
      case RequestType.GetWithAuth:
        return {
          "Accept": "application/json",
          "Authorization": "Bearer " + token
        };
    }
    //Not reachable
    return {"Accept": "application/json"};
  }

  //body
  static Map<String, dynamic> getPatchRequestBody() {
    return {'_method': 'PATCH'};
  }
  //app data 
  static const String APP_DATA = 'rest/bootstrap/';
  //user profile
  static const String USER = 'rest/accountInfo/';
}
