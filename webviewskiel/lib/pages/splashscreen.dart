import 'package:flutter/material.dart';
import 'package:flutter_webview_plugin/flutter_webview_plugin.dart';

class SplashScreen extends StatefulWidget {
  const SplashScreen({ Key key }) : super(key: key);

  @override
  _SplashScreenState createState() => _SplashScreenState();
}

class _SplashScreenState extends State<SplashScreen> {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      routes: {
        "/": (_) =>  const WebviewScaffold(
              url: "https://skielstore.herryprasetyo.my.id/",
            ) // WebviewScaffold
      },
    );

  }
}