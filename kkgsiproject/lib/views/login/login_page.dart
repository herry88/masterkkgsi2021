import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter/painting.dart';
import 'package:flutter/rendering.dart';
import 'package:flutter/widgets.dart';

class Login extends StatefulWidget {
  const Login({Key key}) : super(key: key);

  @override
  _LoginState createState() => _LoginState();
}

class _LoginState extends State<Login> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
        color: Colors.white,
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
                margin: EdgeInsets.only(
                  top: 24.0,
                ),
                child: Text(
                  'Login Page',
                  style: TextStyle(
                    color: Colors.black,
                    fontWeight: FontWeight.bold,
                    letterSpacing: 0.5,
                    fontSize: 30.0,
                  ),
                ),
              ),
            ),
            Container(
              margin: EdgeInsets.fromLTRB(
                24,
                24,
                23,
                0,
              ),
              child: TextFormField(
                style: TextStyle(
                  letterSpacing: 0.1,
                  fontWeight: FontWeight.w500,
                ),
                decoration: InputDecoration(
                  hintText: 'email',
                  prefixIcon: Icon(
                    Icons.email,
                  ),
                ),
                keyboardType: TextInputType.emailAddress,
              ),
            ),
            Container(
                margin: EdgeInsets.fromLTRB(
                  24,
                  16,
                  24,
                  0,
                ),
                child: TextFormField(
                  style: TextStyle(
                    letterSpacing: 0.1,
                    fontWeight: FontWeight.bold,
                  ),
                  decoration: InputDecoration(
                    hintText: 'password',
                    prefixIcon: Icon(
                      Icons.lock_clock_outlined,
                    ),
                  ),
                  keyboardType: TextInputType.visiblePassword,
                )),
            // Container(
            //   margin:EdgeInsets.fromLTRB(24, 8, 24, 0,
            //   ),
            //   alignment: Alignment.centerRight,
            //   child: GestureDetector(
            //     onTap: () {},
            //     child: Text('forgot password'),
            //   ),
            // ),
            Container(
              margin: EdgeInsets.fromLTRB(
                24,
                16,
                24,
                0,
              ),
              child: ElevatedButton(
                  onPressed: () {},
                  child: Text(
                    'login',
                  )),
            )
          ],
        ),
      ),
    );
  }
}