<?php

if (!isset($_SESSION)) {
  session_start();
}

$_SESSION['dXVpZA'] = md5(uniqid(mt_rand(), true));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="Ym9yc2E">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cep Telefonu - Modelleri & Fiyatları</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body ng-controller="Ym9yc2FjdHJs" ng-cloak>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <p>&nbsp;</p>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Aranacak kelimeleri buraya girin..." autofocus="autofocus" ng-model="c2VhcmNoX3dvcmQ" ng-init="c2VhcmNoX3dvcmQ='samsung note 4'">
        <span class="input-group-btn">
        <button class="btn btn-default" type="button" ng-click="YnVs(c2VhcmNoX3dvcmQ)"><span class="glyphicon glyphicon-search"></span>&nbsp;Bul</button>
        </span> </div>      
      <p>&nbsp;</p>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive">
        <table id="table" class="table table-bordered table-hover" summary="Cep Telefonu - Modelleri & Fiyatları">
          <thead>
            <tr>
              <th scope="col" class="text-center">Satıcı Adı</th>
              <th scope="col" class="text-center">Ürün Adı</th>
              <th scope="col" class="text-center">Fiyat</th>
              <th scope="col" class="text-center">Durum</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="ZGF0YSBSb3c in ZGF0YVJvd3M">
              <td><span>{{ZGF0YSBSb3c.sallerName}}</span></td>
              <td><a href="{{ZGF0YSBSb3c.url}}" target="new">{{ZGF0YSBSb3c.productName}}</a></td>
              <td class="text-right"><span>{{ZGF0YSBSb3c.price}}</span></td>
              <td><span>{{ZGF0YSBSb3c.proStatus}}</span></td>
            </tr>
            <tr ng-show="eXVrbGVuaXlvcg">
              <td colspan="4"><div class="text-center"><span>Yükleniyor...</span></div></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="text-center">
    <a href="mailto:recepuncu@gmail.com"> recepuncu@gmail.com</a>
  </div>
</footer>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<script type="text/javascript">
var YXBw=angular.module("Ym9yc2E",[]);YXBw.controller("Ym9yc2FjdHJs",function($scope,$http){$scope.eXVrbGVuaXlvcg=true;$http.get("0.php?dXVpZA=<?php echo $_SESSION['dXVpZA']; ?>&bWV0aG9k=cHJvZHVjdF9saXN0").then(function(success_response){$scope.ZGF0YVJvd3M=success_response.data;$scope.eXVrbGVuaXlvcg=false;});$scope.YnVs=function(c2VhcmNoX3dvcmQ_val){$scope.ZGF0YVJvd3M=[];$scope.eXVrbGVuaXlvcg=true;$http.get("0.php?dXVpZA=<?php echo $_SESSION['dXVpZA']; ?>&bWV0aG9k=cHJvZHVjdF9saXN0&c2VhcmNoX3dvcmQ="+c2VhcmNoX3dvcmQ_val).then(function(success_response){$scope.ZGF0YVJvd3M=success_response.data;$scope.eXVrbGVuaXlvcg=false;});};});
</script>
</body>
</html>