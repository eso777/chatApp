<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chat App</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

    <link href="{{Url('/')}}/assets/custom/style.css" rel="stylesheet">
    <link href="{{Url('/')}}/assets/custom/chat.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>

    <div class="">

     <div class="mail-box">
          <aside class="sm-side">
               <div class="user-head">
                    <a class="inbox-avatar" href="javascript:;">
                         <img  width="64" hieght="60" src="http://bootsnipp.com/img/avatars/ebeb306fd7ec11ab68cbcaa34282158bd80361a7.jpg">
                    </a>
                    <div class="user-name">
                         <h5><a href="#">{{ @Auth::guard('web')->user()->name  }}</a></h5>
                         <span><a href="#">{{ @Auth::guard('web')->user()->email }}</a></span><br/>
                         <span><a href="{{Url('/')}}/logout">Logout</a></span>
                    </div>
                    <a class="mail-dropdown pull-right" href="javascript:;">
                         <i class="fa fa-chevron-down"></i>
                    </a>
               </div>
               <div class="inbox-body">
                    <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                         Compose
                    </a>
                    <!-- Modal -->
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                         <div class="modal-dialog">
                              <div class="modal-content">
                                   <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Compose</h4>
                                   </div>
                                   <div class="modal-body">
                                        <form role="form" class="form-horizontal">
                                             <div class="form-group">
                                                  <label class="col-lg-2 control-label">To</label>
                                                  <div class="col-lg-10">
                                                       <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                                  </div>
                                             </div>
                                             <div class="form-group">
                                                  <label class="col-lg-2 control-label">Cc / Bcc</label>
                                                  <div class="col-lg-10">
                                                       <input type="text" placeholder="" id="cc" class="form-control">
                                                  </div>
                                             </div>
                                             <div class="form-group">
                                                  <label class="col-lg-2 control-label">Subject</label>
                                                  <div class="col-lg-10">
                                                       <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                                  </div>
                                             </div>
                                             <div class="form-group">
                                                  <label class="col-lg-2 control-label">Message</label>
                                                  <div class="col-lg-10">
                                                       <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                  </div>
                                             </div>

                                             <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                       <span class="btn green fileinput-button">
                                                            <i class="fa fa-plus fa fa-white"></i>
                                                            <span>Attachment</span>
                                                            <input type="file" name="files[]" multiple="">
                                                       </span>
                                                       <button class="btn btn-send" type="submit">Send</button>
                                                  </div>
                                             </div>
                                        </form>
                                   </div>
                              </div><!-- /.modal-content -->
                         </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
               </div>
               <ul class="inbox-nav inbox-divider">
                    <li class="active">
                         <a href="{{Url('/')}}/newRoom"><i class="fa fa-plus"></i> Add New Room {{--<span class="label label-danger pull-right">2</span>--}}</a>
                    </li>
                    <li class="active">
                         <a href="{{Url('/')}}/myRooms"><i class="fa fa-users"></i> My Rooms {{--<span class="label label-danger pull-right">2</span>--}}</a>
                    </li>

                    <li class="active">
                         <a href="{{Url('/')}}/allRooms"><i class="fa fa-inbox"></i> All Rooms {{--<span class="label label-danger pull-right">2</span>--}}</a>
                    </li>
               </ul>


          </aside>
          <aside class="lg-side">
               <div class="inbox-head">
                    <h3>Chat App</h3>
                    <form action="#" class="pull-right position">
                         <div class="input-append">
                              <input type="text" class="sr-input" placeholder="Search Mail">
                              <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                         </div>
                    </form>
               </div>
               <div class="inbox-body">
                    @yield('content')
               {{--<div class="mail-option">
                         <div class="chk-all">
                              <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                              <div class="btn-group">
                                   <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                        All
                                        <i class="fa fa-angle-down "></i>
                                   </a>
                                   <ul class="dropdown-menu">
                                        <li><a href="#"> None</a></li>
                                        <li><a href="#"> Read</a></li>
                                        <li><a href="#"> Unread</a></li>
                                   </ul>
                              </div>
                         </div>

                         <div class="btn-group">
                              <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                   <i class=" fa fa-refresh"></i>
                              </a>
                         </div>
                         <div class="btn-group hidden-phone">
                              <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                                   More
                                   <i class="fa fa-angle-down "></i>
                              </a>
                              <ul class="dropdown-menu">
                                   <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                   <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                   <li class="divider"></li>
                                   <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                              </ul>
                         </div>
                         <div class="btn-group">
                              <a data-toggle="dropdown" href="#" class="btn mini blue">
                                   Move to
                                   <i class="fa fa-angle-down "></i>
                              </a>
                              <ul class="dropdown-menu">
                                   <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                   <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                   <li class="divider"></li>
                                   <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                              </ul>
                         </div>

                         <ul class="unstyled inbox-pagination">
                              <li><span>1-50 of 234</span></li>
                              <li>
                                   <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                              </li>
                              <li>
                                   <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                              </li>
                         </ul>
                    </div>
                    <table class="table table-inbox table-hover">
                         <tbody>
                              <tr class="unread">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                   <td class="view-message  dont-show">PHPClass</td>
                                   <td class="view-message ">Added a new class: Login Class Fast Site</td>
                                   <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                   <td class="view-message  text-right">9:27 AM</td>
                              </tr>
                              <tr class="unread">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                   <td class="view-message dont-show">Google Webmaster </td>
                                   <td class="view-message">Improve the search presence of WebSite</td>
                                   <td class="view-message inbox-small-cells"></td>
                                   <td class="view-message text-right">March 15</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                   <td class="view-message dont-show">JW Player</td>
                                   <td class="view-message">Last Chance: Upgrade to Pro for </td>
                                   <td class="view-message inbox-small-cells"></td>
                                   <td class="view-message text-right">March 15</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                   <td class="view-message dont-show">Tim Reid, S P N</td>
                                   <td class="view-message">Boost Your Website Traffic</td>
                                   <td class="view-message inbox-small-cells"></td>
                                   <td class="view-message text-right">April 01</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                   <td class="view-message dont-show">Freelancer.com <span class="label label-danger pull-right">urgent</span></td>
                                   <td class="view-message">Stop wasting your visitors </td>
                                   <td class="view-message inbox-small-cells"></td>
                                   <td class="view-message text-right">May 23</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                   <td class="view-message dont-show">WOW Slider </td>
                                   <td class="view-message">New WOW Slider v7.8 - 67% off</td>
                                   <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                   <td class="view-message text-right">March 14</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                   <td class="view-message dont-show">LinkedIn Pulse</td>
                                   <td class="view-message">The One Sign Your Co-Worker Will Stab</td>
                                   <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                   <td class="view-message text-right">Feb 19</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                   <td class="view-message dont-show">Drupal Community<span class="label label-success pull-right">megazine</span></td>
                                   <td class="view-message view-message">Welcome to the Drupal Community</td>
                                   <td class="view-message inbox-small-cells"></td>
                                   <td class="view-message text-right">March 04</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                   <td class="view-message dont-show">Facebook</td>
                                   <td class="view-message view-message">Somebody requested a new password </td>
                                   <td class="view-message inbox-small-cells"></td>
                                   <td class="view-message text-right">June 13</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                   <td class="view-message dont-show">Skype <span class="label label-info pull-right">family</span></td>
                                   <td class="view-message view-message">Password successfully changed</td>
                                   <td class="view-message inbox-small-cells"></td>
                                   <td class="view-message text-right">March 24</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                   <td class="view-message dont-show">Google+</td>
                                   <td class="view-message">alireza, do you know</td>
                                   <td class="view-message inbox-small-cells"></td>
                                   <td class="view-message text-right">March 09</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                   <td class="dont-show">Zoosk </td>
                                   <td class="view-message">7 new singles we think you'll like</td>
                                   <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                   <td class="view-message text-right">May 14</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                   <td class="view-message dont-show">LinkedIn </td>
                                   <td class="view-message">Alireza: Nokia Networks, System Group and </td>
                                   <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                   <td class="view-message text-right">February 25</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                   <td class="dont-show">Facebook</td>
                                   <td class="view-message view-message">Your account was recently logged into</td>
                                   <td class="view-message inbox-small-cells"></td>
                                   <td class="view-message text-right">March 14</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                   <td class="view-message dont-show">Twitter</td>
                                   <td class="view-message">Your Twitter password has been changed</td>
                                   <td class="view-message inbox-small-cells"></td>
                                   <td class="view-message text-right">April 07</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                   <td class="view-message dont-show">InternetSeer Website Monitoring</td>
                                   <td class="view-message">http://golddesigner.org/ Performance Report</td>
                                   <td class="view-message inbox-small-cells"></td>
                                   <td class="view-message text-right">July 14</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                   <td class="view-message dont-show">AddMe.com</td>
                                   <td class="view-message">Submit Your Website to the AddMe Business Directory</td>
                                   <td class="view-message inbox-small-cells"></td>
                                   <td class="view-message text-right">August 10</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                   <td class="view-message dont-show">Terri Rexer, S P N</td>
                                   <td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
                                   <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                   <td class="view-message text-right">April 14</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                   <td class="view-message dont-show">Bertina </td>
                                   <td class="view-message">IMPORTANT: Don't lose your domains!</td>
                                   <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                   <td class="view-message text-right">June 16</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                   <td class="view-message dont-show">Laura Gaffin, S P N </td>
                                   <td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
                                   <td class="view-message inbox-small-cells"></td>
                                   <td class="view-message text-right">August 10</td>
                              </tr>
                              <tr class="">
                                   <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                   </td>
                                   <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                   <td class="view-message dont-show">Facebook</td>
                                   <td class="view-message view-message">Alireza Zare Login faild</td>
                                   <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                   <td class="view-message text-right">feb 14</td>
                              </tr>
                         </tbody>
                    </table> --}}
               </div>
          </aside>
     </div>
</div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
