<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
  <div class=" card-box">
    <div class="panel-heading"> 
        <h3 class="text-center"> Sign In <strong class="text-custom"></strong> </h3>
    </div> 
    <div class="panel-body">
        <div ng-class="{ 'alert': flash, 'alert-success': flash.type === 'success', 'alert-danger': flash.type === 'error' }" ng-if="flash" ng-bind="flash.message"></div>
        <form class="form-horizontal m-t-20" method="post" name="form" novalidate ng-submit="vm.login()">                
            <div class="form-group" ng-class="{ 'has-error': form.username.$dirty && form.username.$error.required }">
                <div class="col-xs-12">
                    <input class="form-control" type="text" required="" placeholder="Username" name="username" id="username" ng-model="vm.username">
                    <span class="help-block" ng-show="form.username.$dirty && form.username.$error.required">Username is required</span>
                </div>
            </div>
            <div class="form-group" ng-class="{ 'has-error': form.password.$dirty && form.password.$error.required }">
                <div class="col-xs-12">
                    <input class="form-control" type="password" required="" placeholder="Password" name="password" id="password" ng-model="vm.password">
                    <span class="help-block" ng-show="form.password.$dirty && form.password.$error.required">Password is required</span>
                </div>
            </div>           

            <div class="form-group text-center m-t-40">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-info btn-block text-uppercase waves-effect waves-light" id="signin" ng-disabled="form.$invalid || vm.dataLoading">Log In</button>
                </div>          
                <img ng-if="vm.dataLoading" src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==" />


            </div>         
            <div class="pull-left">
            <a href="#/register" title="">Create User</a>    
            </div>
            <div class="pull-right">
            <a href="https://www.facebook.com/eboominathan" title="" target="_blank">Developed by Boominathan </a>    
            </div>
        </form>             
    </div>   
</div>                              
</div>
