<?php include_once 'dbconnect.php';?>
<head>
<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css' />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-beta.1/angular.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-beta.1/angular-animate.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
<style>
.wrapper {
  font-family: "Lato";
  overflow: visible;
}
.wrapper .nav-bar ul {
  list-style: none;
  padding-left: 10px;
  margin: 0;
  position: relative;
}
.wrapper .nav-bar ul li {
  display: inline-block;
  border: 0px;
  border-style: solid;
  -webkit-border-image: -webkit-gradient(linear, 0 100%, 0 0, from(#edf2f5), to(transparent)) 1 20%;
  -webkit-border-image: -webkit-linear-gradient(bottom, #edf2f5, transparent) 1 20%;
  -moz-border-image: -moz-linear-gradient(bottom, #edf2f5, transparent) 1 20%;
  -o-border-image: -o-linear-gradient(bottom, #edf2f5, transparent) 1 20%;
  border-image: linear-gradient(to top, #edf2f5 0%, transparent) 1 20%;
}
.wrapper .nav-bar .dropdowns-wrapper {
  padding: 4px 0px;
}
.wrapper .nav-bar .dropdown-container {
  display: inline-block;
  position: relative;
}
.wrapper .nav-bar .dropdown-container .dropdown {
  position: relative;
  cursor: pointer;
  z-index: 2;
}
.wrapper .nav-bar .dropdown-container .dropdown-menu {
  position: absolute;
  display: none;
  z-index: 1;
  left: -130px;
  top: 60px;
  min-height: 10px;
  min-width: 10px;
  width: 280px;
}
.wrapper .nav-bar .dropdown-container .dropdown-menu .dropdown-header {
  background: #FFF;
  padding: 15px;
  position: relative;
  text-align: center;
  color: #747F8B;
  font-weight: bold;
  border-radius: 10px 10px 0 0;
  border: 0px;
  border-style: solid;
  border-bottom-width: 1px;
  -moz-border-image: -moz-linear-gradient(right, white, #cedae0, #cedae0, white) 1 20%;
  -o-border-image: -o-linear-gradient(right, white, #cedae0, #cedae0, white) 1 20%;
  border-image: linear-gradient(to right, white 0%, #cedae0 40%, #cedae0 60%, white 100%) 1 20%;
  box-shadow: 0px 2px 10px -2px #cedae0;
}
.wrapper .nav-bar .dropdown-container .dropdown-menu .dropdown-header .triangle {
  position: absolute;
  top: -8px;
  left: 134px;
  height: 15px;
  width: 15px;
  border-radius: 6px 0px 0px 0px;
  transform: rotate(45deg);
  background: #FFF;
}
.wrapper .nav-bar .dropdown-container .dropdown-menu .dropdown-header .count {
  position: static;
  height: 25px;
  width: 25px;
  display: inline-block;
  line-height: 24px;
  margin-left: 8px;
  font-size: 12px;
  vertical-align: middle;
}
.wrapper .nav-bar .dropdown-container .dropdown-menu .dropdown-body {
  max-height: 292px;
  background: #e9f0f3;
  overflow-y: auto;
  overflow-x: hidden;
}
.wrapper .nav-bar .dropdown-container .dropdown-menu .dropdown-body .notification {
  background: #FFF;
  padding: 15px;
  border: 0px;
  border-style: solid;
  border-bottom-width: 1px;
  -moz-border-image: -moz-linear-gradient(right, white, #cedae0, #cedae0, white) 1 20%;
  -o-border-image: -o-linear-gradient(right, white, #cedae0, #cedae0, white) 1 20%;
  border-image: linear-gradient(to right, white 0%, #cedae0 40%, #cedae0 60%, white 100%) 1 20%;
}
.wrapper .nav-bar .dropdown-container .dropdown-menu .dropdown-body .notification.new {
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  -ms-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
  background: #e9f0f3;
}
.wrapper .nav-bar .dropdown-container .dropdown-menu .dropdown-body .notification .notification-image-wrapper {
  display: table-cell;
  vertical-align: middle;
}
.wrapper .nav-bar .dropdown-container .dropdown-menu .dropdown-body .notification .notification-image {
  display: inline-block;
  height: 32px;
  width: 32px;
  overflow: hidden;
  border-radius: 100%;
}
.wrapper .nav-bar .dropdown-container .dropdown-menu .dropdown-body .notification .notification-text {
  display: table-cell;
  padding-left: 15px;
  vertical-align: middle;
  color: #747F8B;
  cursor: pointer;
  font-size: 14px;
  word-spacing: 2px;
  line-height: 21px;
}
.wrapper .nav-bar .dropdown-container .dropdown-menu .dropdown-body .notification .notification-text .highlight {
  font-weight: bold;
}
.wrapper .nav-bar .dropdown-container .fa {
  color: #9FB6C3;
  font-size: 22px;
}
.wrapper .nav-bar .dropdown-container .count {
  position: absolute;
  top: -6px;
  right: -1px;
  height: 15px;
  width: 15px;
  overflow: hidden;
  background: #21B7B7;
  color: #FFF;
  text-align: center;
  border-radius: 100%;
  font-size: 9px;
  font-weight: bold;
  line-height: 15px;
}
.wrapper .nav-bar .notifications {
  margin-right: 10px;
}
.wrapper .nav-bar .messages {
  margin-left: 10px;
}
.wrapper .nav-bar .user {
  background: #9FB6C3;
  border-left: 0px;
  position: absolute;
  right: 0;
  top: -1px;
}
.wrapper .nav-bar .user-options-wrapper .user-image {
  background: url("http://www.apnatimepass.com/tom-cruise-ms.jpg");
  background-size: cover;
  background-position: center;
  vertical-align: bottom;
  height: 32px;
  width: 32px;
  display: inline-block;
  border-radius: 100%;
  margin-right: 10px;
}
.wrapper .nav-bar .user-options-wrapper .user-options {
  vertical-align: bottom;
  border: 2px solid #FFF;
  border-radius: 100%;
  height: 30px;
  width: 30px;
  display: inline-block;
  text-align: center;
  position: relative;
}
.wrapper .nav-bar .user-options-wrapper .user-options .fa {
  position: absolute;
  top: 9px;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  color: #FFF;
  font-size: 12px;
}
.wrapper .body-image {
  /*background: url('http://stock-wallpapers.com/wp-content/uploads/2014/05/nexus_5_wall_8.jpg');*/
  background: #577597;
  max-width: 100%;
  height: 440px;
  background-size: cover;
  background-position: center;
  margin-top: -2px;
  padding: 30px;
  position: relative;
  border-radius: 2px;
}
.wrapper .body-image .instruction {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  margin: auto;
  display: none;
  color: #FFF;
  font-size: 18px;
  width: 100%;
  height: 20px;
  text-align: center;
}
.wrapper .body-image .info {
  color: rgba(255, 255, 255, 0.9);
  border: 1px solid rgba(255, 255, 255, 0.3);
  background: rgba(0, 0, 0, 0.2);
  padding: 10px;
}
.wrapper .body-image .info ul {
  list-style: square;
  padding-right: 20px;
}
.wrapper .body-image .info ul li {
  margin-bottom: 13px;
  font-size: 14px;
  word-spacing: 2px;
  line-height: 21px;
  /*border-bottom: 1px solid rgba(255, 255, 255, 0.2);*/
}
.wrapper .body-image .info .ok-btn-wrapper {
  text-align: center;
  position: relative;
  padding: 4px 0px 10px 0px;
}
.wrapper .body-image .info .ok-btn-wrapper .ok-btn {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  cursor: pointer;
  color: rgba(255, 255, 255, 0.9);
  border: 1px solid rgba(255, 255, 255, 0.3);
  border-radius: 2px;
}
.wrapper .body-image .info .ok-btn-wrapper .ok-btn .text {
  z-index: 1;
  position: relative;
}
.wrapper .body-image .info .ok-btn-wrapper .ok-btn .hover-overlay {
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  -ms-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
  position: absolute;
  height: 100%;
  width: 0;
  left: 0;
  top: 0;
  background: #21B7B7;
  opacity: .6;
  z-index: 0;
}
.wrapper .body-image .info .ok-btn-wrapper .ok-btn:hover .hover-overlay {
  width: 100%;
}

::-webkit-scrollbar {
  width: 3px;
}

::-webkit-scrollbar-track {
  webkit-box-shadow: inset 0 0 6px #E3EBEF;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  background: #E3EBEF;
}

::-webkit-scrollbar-thumb {
  -webkit-border-radius: 10px;
  border-radius: 10px;
  background: #9FB6C3;
  -webkit-box-shadow: none;
}

::-webkit-scrollbar-thumb:window-inactive {
  background: #9FB6C3;
}

.new.notification.ng-enter {
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  -ms-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
  margin-top: -20%;
  background: #dde6eb !important;
}

.new.notification.ng-enter-active {
  margin-top: 0;
}

.animated {
  -webkit-animation-duration: 500ms;
  animation-duration: 500ms;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -10%, 0);
    transform: translate3d(0, -10%, 0);
  }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -10%, 0);
    transform: translate3d(0, -10%, 0);
  }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
}

@-webkit-keyframes fadeOutUp {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -10%, 0);
    transform: translate3d(0, -10%, 0);
  }
}
@keyframes fadeOutUp {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -10%, 0);
    transform: translate3d(0, -10%, 0);
  }
}
.fadeOutUp {
  -webkit-animation-name: fadeOutUp;
  animation-name: fadeOutUp;
}

@-webkit-keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
@keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
.fadeOut {
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut;
}

@-webkit-keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
.fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
}

@-webkit-keyframes zoomIn {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }
  50% {
    opacity: 1;
  }
}
@keyframes zoomIn {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }
  50% {
    opacity: 1;
  }
}
.zoomIn {
  -webkit-animation-name: zoomIn;
  animation-name: zoomIn;
}

@-webkit-keyframes zoomOut {
  from {
    opacity: 1;
  }
  50% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }
  to {
    opacity: 0;
  }
}
@keyframes zoomOut {
  from {
    opacity: 1;
  }
  50% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }
  to {
    opacity: 0;
  }
}
.zoomOut {
  -webkit-animation-name: zoomOut;
  animation-name: zoomOut;
}
</style>
</body>
<script>
var app = angular.module('demoApp', ['ngAnimate']);
app.controller('demoController', function($scope){
  var opendd;
  var storedNewNotifications;
  var storedReadNotifications;
  var storedawaitingNotifications;
  var init = function(){
    storedNewNotifications = JSON.parse(localStorage.getItem('newNotifications'));
    storedReadNotifications = JSON.parse(localStorage.getItem('readNotifications'));
    storedawaitingNotifications = JSON.parse(localStorage.getItem('awaitingNotifications'));
    if(storedNewNotifications == null){
      $scope.newNotifications = [
        {
          user: pollingData.users[1],
          action: pollingData.actions[0],
          target: pollingData.actionTargets[2],
          timestamp: new Date()
        }
      ];
    }
    else{
      $scope.newNotifications = storedNewNotifications;
    }
    if(storedReadNotifications == null){
      $scope.readNotifications = [
        {
          user: pollingData.users[2],
          action: pollingData.actions[1],
          target: pollingData.actionTargets[0],
          timestamp: new Date()
        }
      ];
    }
    else{
      $scope.readNotifications = storedReadNotifications;
    }
    if(storedawaitingNotifications == null)
      $scope.awaitingNotifications = 1;
    else{
      $scope.awaitingNotifications = storedawaitingNotifications;
      if($scope.awaitingNotifications == 0)
        angular.element('#notifications-count').hide();
    }
    $scope.showNotifications = function($event){
      var targetdd = angular.element($event.target).closest('.dropdown-container').find('.dropdown-menu');
      opendd = targetdd;
        if(targetdd.hasClass('fadeInDown')){
          hidedd(targetdd);
        }
        else{
          targetdd.css('display', 'block').removeClass('fadeOutUp').addClass('fadeInDown')
                          .on('animationend webkitAnimationEnd oanimationend MSAnimationEnd', function(){
                            angular.element(this).show();
                          });
          targetdd.find('.dropdown-body')[0].scrollTop = 0;
          $scope.awaitingNotifications = 0;
            angular.element('#notifications-count').removeClass('fadeIn').addClass('fadeOut');
        }
    };
    $scope.hideInfo = function(){
      angular.element('#demoInfo').addClass('zoomOut')
                    .on('animationend webkitAnimationEnd oanimationend MSAnimationEnd', function(){
                      angular.element(this).hide();
                      angular.element('.instruction').addClass('zoomIn').show();
                    });
    }
    //show notifications count if new notifications are received
    setInterval(function(){
      if($scope.awaitingNotifications > 0 && opendd == null && (angular.element('#notifications-count').css('opacity') == '0' || angular.element('#notifications-count').is(':hidden')))
          angular.element('#notifications-count').removeClass('fadeOut').addClass('fadeIn').show();
    }, 400);
    dummyPolling();
  }

  //Hide dropdown function
  var hidedd = function(targetdd){
    targetdd.removeClass('fadeInDown').addClass('fadeOutUp')
                      .on('animationend webkitAnimationEnd oanimationend MSAnimationEnd', function(){
                          angular.element(this).hide();
                        });
      opendd = null;
      $scope.awaitingNotifications = 0;
      angular.forEach($scope.newNotifications, function(notification){
        $scope.readNotifications.push(notification);
      });
      $scope.newNotifications = [];
      localStorage.setItem('readNotifications', JSON.stringify($scope.readNotifications));
      localStorage.setItem('newNotifications', JSON.stringify($scope.newNotifications));
    localStorage.setItem('awaitingNotifications', JSON.stringify($scope.awaitingNotifications));
      if($scope.awaitingNotifications > 0)
        angular.element('#notifications-count').removeClass('fadeOut').addClass('fadeIn');
  }

  //New notification is created by selecting random user, action and targets from this object
  var pollingData = {
      users : [
        {
            name: "Fauzan Khan",
            imageUrl: "https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAANfAAAAJDE1MzNiYjM1LWVjYzUtNDcwZi1hMmExLTQ5ZDVjYzViMDkzYQ.jpg"
        }
      ],
      actions: ["upvoted"],
        actionTargets: ["your answer"]
  };

  //creates and returns a new notification
  var getNewNotification = function(){
    var newNotification = {
      user: pollingData.users[0],
      action: pollingData.actions[0],
      target: pollingData.actionTargets[0],
      timestamp: new Date()
    }
    return newNotification;
  };

  //This function calls itslef after random interval
  var dummyPolling = function(){
    setTimeout(function() {
      $scope.$apply(function(){
        $scope.newNotifications.push(getNewNotification());
        $scope.awaitingNotifications++;
        localStorage.setItem('newNotifications', JSON.stringify($scope.newNotifications));
        localStorage.setItem('awaitingNotifications', JSON.stringify($scope.awaitingNotifications));
      });
            
      });
  }

  window.onclick = function(event){
    var clickedElement = angular.element(event.target);
    var clickedDdTrigger = clickedElement.closest('.dd-trigger').length;
    var clickedDdContainer = clickedElement.closest('.dropdown-menu').length;
    if(opendd != null && clickedDdTrigger == 0 && clickedDdContainer == 0){
      hidedd(opendd);
    }
  }
  
  window.onbeforeunload = function(e) {
    if(opendd != null){
      console.log('closingdd');
      hidedd(opendd); 
    }
  };

  init();
})
</script>