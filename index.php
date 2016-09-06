<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/*

if (!isset($_SESSION)) {
  session_start();
}

$_SESSION['dXVpZA'] = md5(uniqid(mt_rand(), true));

*/

$dXVpZA = md5(uniqid(mt_rand(), true));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="tr" ng-app="Ym9yc2E">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="N11 de tüm firmalar arasındaki en ucuz Cep Telefonu ve Tablet Fiyatları">
<meta name="author" content="recepuncu@gmail.com" />
<title>Cep Telefonu ve Tablet Fiyatları</title>
<link rel="alternate" hreflang="tr" href="https://mobilborsa.herokuapp.com/" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="bootstrap.custom.min.css" rel="stylesheet" />
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<meta name="theme-color" content="#FFC107" />
</head>

<body ng-controller="Ym9yc2FjdHJs" ng-cloak>
<h1 class="text-center">Cep Telefonu ve Tablet</h1>
<h2 class="text-center">En iyi fiyatlar</h2>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
      <p>&nbsp;</p>
      <div class="input-group">
        <span class="input-group-btn">
		  <div class="btn-group" role="group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			{{ a2F0ZWdvcmk.label }}
			  <span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
			  <li><a href="javascript:void(0);" ng-click="a2F0ZWdvcmk.val='telefon-ve-aksesuarlari/cep-telefonu'; a2F0ZWdvcmk.label='Cep Telefonu';">Cep Telefonu</a></li>
			  <li><a href="javascript:void(0);" ng-click="a2F0ZWdvcmk.val='bilgisayar/ipad-ve-tablet'; a2F0ZWdvcmk.label='Ipad ve Tablet';">Ipad ve Tablet</a></li>
			</ul>
		  </div>        
        </span>
		<input type="text" class="form-control" placeholder="Aranacak kelimeleri buraya girin..." autofocus="autofocus" ng-model="c2VhcmNoX3dvcmQ" ng-init="c2VhcmNoX3dvcmQ='LG G4 32 GB'" key-enter="YnVs(c2VhcmNoX3dvcmQ)">
        <span class="input-group-btn">
        <button class="btn btn-default" type="button" ng-click="YnVs(c2VhcmNoX3dvcmQ)"><span class="glyphicon glyphicon-search"></span>&nbsp;Bul</button>
        </span> </div>      
      <p>&nbsp;</p>
    </div>
  </div>
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>  
  <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive">
        <table id="table" class="table table-bordered table-striped table-hover" summary="Cep Telefonu - Modelleri & Fiyatları">
          <thead>
            <tr>
              <th scope="col" class="text-center">Sıra</th>
			  <th scope="col" class="text-center">Satıcı</th>
			  <th scope="col" class="text-center">Fiyat</th>
              <th scope="col" class="text-center">Ürün</th>              
              <th scope="col" class="text-center">Durum</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="ZGF0YSBSb3c in ZGF0YVJvd3M" ng-class="$index  == 0 ? 'success' : ''">
			  <td class="text-center">
				<span class="label label-success" ng-show="($index + 1) <= 3">{{$index + 1}}</span>
				<span class="label label-warning" ng-show="($index + 1) > 3 && ($index + 1) <= 5">{{$index + 1}}</span>
				<span class="label label-danger" ng-show="($index + 1) > 5 && ($index + 1) <= 10">{{$index + 1}}</span>
				<span class="label label-default" ng-show="($index + 1) > 10">{{$index + 1}}</span>
			  </td>
              <td><a href="{{ZGF0YSBSb3c.sallerInfo}}" target="new"><span itemprop="seller">{{ZGF0YSBSb3c.sallerName}}</span></a></td>
			  <td class="text-right"><span itemprop="price" ng-class="$index  == 0 ? 'badge' : ''">{{ZGF0YSBSb3c.price}}</span></td>
              <td><a href="{{ZGF0YSBSb3c.url}}" target="new"><span itemprop="name">{{ZGF0YSBSb3c.productName}}</span></a></td>              
              <td><span itemprop="availability">{{ZGF0YSBSb3c.proStatus}}</span></td>
            </tr>
            <tr ng-show="eXVrbGVuaXlvcg">
              <td colspan="5"><div class="text-center"><span>Yükleniyor...</span></div></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="text-center">
    <a href="mailto:recepuncu@gmail.com">author: recepuncu@gmail.com</a>
  </div>
</footer>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<script type="text/javascript">
  var YXBw=angular.module("Ym9yc2E",[]);YXBw.directive('keyEnter',function(){return function(scope,element,attrs){element.bind("keydown keypress",function(event){if(event.which===13){scope.$apply(function(){scope.$eval(attrs.keyEnter);});event.preventDefault();}});};});YXBw.controller("Ym9yc2FjdHJs",function($scope,$http){$scope.a2F0ZWdvcmk={val:'telefon-ve-aksesuarlari/cep-telefonu',label:'Cep Telefonu'};$scope.eXVrbGVuaXlvcg=true;$http.get("0.php?dXVpZA=<?php echo $dXVpZA; ?>&bWV0aG9k=cHJvZHVjdF9saXN0&c2VhcmNoX2NhdGVnb3J5="+$scope.a2F0ZWdvcmk.val).then(function(success_response){$scope.ZGF0YVJvd3M=success_response.data;$scope.eXVrbGVuaXlvcg=false;});$scope.YnVs=function(c2VhcmNoX3dvcmQ_val){$scope.ZGF0YVJvd3M=[];$scope.eXVrbGVuaXlvcg=true;$http.get("0.php?dXVpZA=<?php echo $dXVpZA; ?>&bWV0aG9k=cHJvZHVjdF9saXN0&c2VhcmNoX2NhdGVnb3J5="+$scope.a2F0ZWdvcmk.val+"&c2VhcmNoX3dvcmQ="+c2VhcmNoX3dvcmQ_val).then(function(success_response){$scope.ZGF0YVJvd3M=success_response.data;$scope.eXVrbGVuaXlvcg=false;});};});

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '180049039071736',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66278658-4', 'auto');
  ga('send', 'pageview');

</script>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KT3QF9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KT3QF9');</script>
<!-- End Google Tag Manager -->
</body>
</html>