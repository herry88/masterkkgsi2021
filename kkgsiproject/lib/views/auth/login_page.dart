import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter/rendering.dart';
import 'package:flutter/widgets.dart';
import 'package:kkgsiproject/constanta/app_theme.dart';

class Login extends StatefulWidget {
  const Login({Key key}) : super(key: key);

  @override
  _LoginState createState() => _LoginState();
}

class _LoginState extends State<Login> {
  CustomAppTheme customAppTheme;
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
        color: customAppTheme.bgLayer1,
        child: ListView(
          padding: const EdgeInsets.only(
            top: 20.0,
          ),
          children: [
            Container(
              child: Icon(
                Icons.person,
                size: 50.0,
                color: Colors.redAccent,
              ),
            ),
            Center(
              child: Container(
                margin: EdgeInsets.only(top: 24.0),
                child: Text(
                  'Login Page',
                  style: TextStyle(
                      color: Colors.black,
                      fontWeight: FontWeight.bold,
                      letterSpacing: 0.5,
                      fontSize: 30.0),
                ),
              ),
            ),
            Container(
              margin: EdgeInsets.fromLTRB(
                24,
                24,
                24,
                0,
              ),
              child: TextFormField(
                style: TextStyle(
                  letterSpacing: 0.1,
                  fontWeight: FontWeight.w500,
                ),
                decoration: InputDecoration(
                  hintText: 'Email',
                  prefixIcon: Icon(
                    Icons.email,
                  ),
                ),
                keyboardType: TextInputType.emailAddress,
              ),
            ),
            Container(
              margin: EdgeInsets.fromLTRB(24, 16, 24, 0),
              child: TextFormField(
                style:
                    TextStyle(letterSpacing: 0.1, fontWeight: FontWeight.bold),
                decoration: InputDecoration(
                  hintText: 'Password',
                  prefixIcon: Icon(
                    Icons.lock_outlined,
                  ),
                ),
                keyboardType: TextInputType.visiblePassword,
              ),
            ),
            // Container(
            //   margin: EdgeInsets.fromLTRB(
            //     24,
            //     8,
            //     24,
            //     0,
            //   ),
            //   alignment: Alignment.centerRight,
            //   child: GestureDetector(
            //     onTap: () {},
            //     child: Text('forgot password'),
            //   ),
            // ),
            Container(
              margin: EdgeInsets.fromLTRB(24, 16, 24, 0),
              child: ElevatedButton(
                onPressed: () {},
                child: Text(
                  'Login',
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
