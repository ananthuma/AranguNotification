<?php
session_start();
if(!$_SESSION['session_id']){
	header('location:index.php');
   }
?>
<head>
<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}</style>
  <meta charset="utf-8">
  <title>Arangu | Admin</title>
 <meta name="description" content="Fisat Arts-Fest Notification Board ERP" />
  <meta name="keywords" content="Fisat,ArtsFest,notification Board,ERP" />
  <link rel="stylesheet" href="../frontend/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="../frontend/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="../frontend/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../frontend/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="../frontend/css/font.css" type="text/css" />

  <link rel="stylesheet" href="css/font.css" type="text/css">
  <link rel="stylesheet" href="css/app.css" type="text/css"><script async="" src="js/controllers/chart.js"></script>
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<div class="bg-danger col-xs-12">
<div class="bg-info col-xs-12">
    <div class="bg-info lter b-b wrapper-md">
  <h1 class="m-n font-thin h2">ARANGU ADMIN PANEL</h1>
</div>          
 </div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">Notifications</div>
        <div class="panel-body">
          <form role="form" action="notifyup.php" method="POST"> 
            <div class="form-group">
              <label>Notification Message</label>
              <input type="text"  name="message" class="form-control" placeholder="Enter message">
            </div>
            <div class="form-group">
              <label>Priority</label>
              <input type="text" name="priority" class="form-control" placeholder="Priority">
            </div>
           
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
          </form>
        </div>
      </div>
	  <div class="col-sm-6">
	  
	  <a href="ResultUpdation.php"><button class="btn btn-warning btn-lg btn-block"> Result update </button></a>
	  </div>
    </div>
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">Stage Update</div>
        <div class="panel-body">
          <form class="bs-example form-horizontal" action="stageup.php" method="POST">
            <div class="form-group" >
              <label class="col-lg-2 control-label">Stage</label>
              <div class="col-lg-10">
                <select multiple="" name="stage" class="form-control">
                <option value="stage1">stage 1</option>
                <option value="stage2">stage 2</option>
                <option value="stage3">stage 3</option>
                <option value="stage4">stage 4</option>
              </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 control-label">Event</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="event" placeholder="eg.drama">
              </div>
            </div>
			<div class="form-group">
              <label class="col-lg-2 control-label">Now/Next</label>
              <div class="col-lg-10">
                
              
                <select multiple="" name="nownext" class="form-control">
                <option value="next">next</option>
                <option value="now">now</option>
              </select>
            
            </div>
            </div>
           
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <button type="submit" class="btn btn-sm btn-info">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
 
  <div class="panel panel-default">
    <div class="panel-heading font-bold">
      Dedication
    </div>
    <div class="panel-body">
      <form class="form-horizontal" action="msgup.php" method="POST">
        <div class="form-group">
          <label class="col-sm-2 control-label" name="message">Message</label>
          <div class="col-sm-10">
            <input type="text" name="message" class="form-control rounded">                        
          </div>
        </div>
        
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <div class="col-sm-4 col-sm-offset-2">
           
            <button type="submit" class="btn btn-primary">Push</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading font-bold">
      Radio
    </div>
    <div class="panel-body">
      <form class="form-horizontal" action="radioup.php" method="POST">
        <div class="form-group">
          <label class="col-sm-2 control-label" name="message">update</label>
          <div class="col-sm-10">
            <input type="text" name="message" class="form-control rounded">                        
          </div>
        </div>
        
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <div class="col-sm-4 col-sm-offset-2">
           
            <button type="submit" class="btn btn-primary">Push</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>