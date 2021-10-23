import 'package:flutter/material.dart';
import 'package:flutter_webview_plugin/flutter_webview_plugin.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      routes: {
        "/": (_) => const WebviewScaffold(
              url: "https://skielstore.herryprasetyo.my.id/",
            ) // WebviewScaffold
      },
    );
  }
}
