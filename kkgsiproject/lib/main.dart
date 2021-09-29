import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'package:kkgsiproject/views/auth/register_page.dart';

import 'views/auth/login_page.dart';
// ini page arkan
void main() {
  runApp(MyApp());
}
class MyApp extends StatelessWidget {
  const MyApp({ Key key }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: MyHomePage(),
    );
  }
}

class MyHomePage extends StatefulWidget {
  const MyHomePage({ Key key }) : super(key: key);

  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {
    getData() async {
      var url = 'https://alamanahalislami.com/presta17/rest/bootstrap';
      final response = await http.get(
        Uri.parse(url),
      );
       print(response.body);
    }
    @override
    void initState() {
      super.initState();
      getData();
    }
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: RegisterPage(),
    );
  }
}