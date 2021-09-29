import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter/painting.dart';
import 'package:kkgsiproject/constanta/app_theme.dart';


class RegisterPage extends StatefulWidget {
  const RegisterPage({Key key}) : super(key: key);

  @override
  _RegisterPageState createState() => _RegisterPageState();
}

class _RegisterPageState extends State<RegisterPage> {
  // call function other file
  CustomAppTheme customAppTheme;
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        body: Container(
          color: Colors.white,
          child: ListView(
            padding: EdgeInsets.only(top: 15.0),
            children: [
              Container(
                child: Icon(
                  Icons.person,
                  size: 30.0,
                  color: Colors.greenAccent,
                ),
              ),
              Center(
                child: Container(
                  child: Text(
                    'Create Account',
                    style: TextStyle(
                      fontWeight: FontWeight.w700,
                      letterSpacing: 0.5,
                    ),
                  ),
                ),
              ),
              Container(
                margin: const EdgeInsets.fromLTRB(
                  24,
                  24,
                  24,
                  0,
                ),
                child: TextFormField(
                  style: TextStyle(
                    letterSpacing: 0.5,
                    fontWeight: FontWeight.w500,
                  ),
                  decoration: InputDecoration(
                      hintText: 'name',
                      prefixIcon: Icon(
                        Icons.account_balance_outlined,
                        size: 22.0,
                      )),
                  keyboardType: TextInputType.text,
                  textCapitalization: TextCapitalization.sentences,
                ),
              ),
              Container(
                margin: const EdgeInsets.fromLTRB(
                  24,
                  16,
                  24,
                  0,
                ),
                child: TextFormField(
                  style: TextStyle(
                    letterSpacing: 0.5,
                    fontWeight: FontWeight.w500,
                  ),
                  decoration: InputDecoration(
                      hintText: 'Email Addres',
                      prefixIcon: Icon(
                        Icons.email,
                        size: 22.0,
                      )),
                  keyboardType: TextInputType.emailAddress,
                  textCapitalization: TextCapitalization.sentences,
                ),
              ),
              Container(
                margin: const EdgeInsets.fromLTRB(
                  24,
                  16,
                  24,
                  0,
                ),
                child: TextFormField(
                  style: TextStyle(
                    letterSpacing: 0.5,
                    fontWeight: FontWeight.w500,
                  ),
                  decoration: InputDecoration(
                      hintText: 'Password',
                      prefixIcon: Icon(
                        Icons.lock_outlined,
                        size: 22.0,
                      )),
                  keyboardType: TextInputType.emailAddress,
                  textCapitalization: TextCapitalization.sentences,
                ),
              ),
              Container(
                margin: const EdgeInsets.fromLTRB(
                  24,
                  16,
                  24,
                  0,
                ),
                child: ElevatedButton(
                  onPressed: () {},
                  child: Text('Register'),
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
