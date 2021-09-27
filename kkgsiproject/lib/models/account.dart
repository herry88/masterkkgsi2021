class Account{
  String name, email, password;
  Account(this.name, this.email, this.password);

  Account.empty(){
    name ="";
    email ="";
    password ="";
  }
}