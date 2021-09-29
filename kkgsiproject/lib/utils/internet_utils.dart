import 'package:connectivity/connectivity.dart';

//class untuk cek internet
class InternetUtils {
  static Future<bool> checkConnection() async {
    ConnectivityResult connectivityResult =
        await (Connectivity().checkConnectivity());
    //kondisi jika ada internet
    if (connectivityResult == ConnectivityResult.mobile) {
      print('terkoneksi dengan paket  data');
      return true;
    } else if (connectivityResult == ConnectivityResult.wifi) {
      print('terkoneksi dengan wifi');
      return true;
    } else {
      return false;
    }
  }
}
