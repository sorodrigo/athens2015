<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Athens 2015</title>
    <!--SOURCES -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <?php echo $this->Html->script('app'); ?>
    <?php echo $this->Html->css('theme'); ?>

</head>
<body ng-app="Athens">
<h1 class="text-center">Welcome</h1>

<div class="container" ng-view ng-controller="AppCtrl as app">
    <div class="jumbotron" ng-class="app.collapse(0)">
        <div class="row">
            <div class="col-sm-6 text-center">
                <h2><a href ng-click="app.setUser('lecturer')">Lecturer</a></h2>
            </div>

            <div class="col-sm-6 text-center">
                <h2><a href ng-click="app.setUser('student')">Student</a></h2>
            </div>
        </div>
    </div>

    <div class="jumbotron" ng-class="app.collapse(1)" ng-controller="ModuleGradesCtrl as grades" ng-show="app.currentUser == 'lecturer' ? true : false">
        <div class="row">

            <div class="col-sm-6 text-center">
                <div class="form-group">
                    <label for="type">Select list:</label>
                    <select class="form-control" id="type">
                        <option>Bachelor of Science</option>
                        <option>Master of Science</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-6 text-center">
                <div class="form-group">
                    <label for="curriculum">Select list:</label>
                    <select class="form-control" id="curriculum">
                        <option ng-repeat="curriculum in grades.curriculum_names">{{curriculum}}</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>