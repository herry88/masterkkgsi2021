import 'dart:convert';

import 'package:kkgsiproject/api/api_utils.dart';
import 'package:kkgsiproject/models/myresponse.dart';
import 'package:kkgsiproject/services/network.dart';
import 'package:kkgsiproject/utils/internet_utils.dart';
import 'package:shared_preferences/shared_preferences.dart';

class AuthController {
  //login
  static Future<MyResponse> loginUser(String email, String password) async {
    //body data
    Map data = {'email': email, 'password': password};

    //URL -nya
    String loginUrl = ApiUtil.MAIN_API_URL + ApiUtil.AUTH_LOGIN;


    //encode
    String body = json.encode(data);

    //check internet
    bool isConnected = await InternetUtils.checkConnection();
    if (!isConnected) {
      return MyResponse.makeInternetConnectionError();
    }

    //response nya 
   try{
     NetworkResponse response = await Network.post(loginUrl, headers: ApiUtil.getHeader(requestType:RequestType.Post), body: body,);

    MyResponse myResponse = MyResponse(response.statusCode);
    if(response.statusCode == 200){
      SharedPreferences sharedPreferences = await SharedPreferences.getInstance();
       
    }
   } catch(e){
     print(e.toString());
     return MyResponse.makeServerProblemError();
   }
  }
}
