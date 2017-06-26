


<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>

  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
  <title>Big Mail</title>

  <style type="text/css">



    body{width: 100%; background-color: #242322; margin:0; padding:0; -webkit-font-smoothing: antialiased;mso-margin-top-alt:0px; mso-margin-bottom-alt:0px; mso-padding-alt: 0px 0px 0px 0px;}

    p,h1,h2,h3,h4{margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;}

    span.preheader{display: none; font-size: 1px;}

    html{width: 100%;}

    table{font-size: 12px;border: 0;}

    .menu-space{padding-right:25px;}

    a,a:hover { text-decoration:none; color:#FFF;}


    .full-height {
      height: 100vh;
      background: url(image/promo.jpg);
      background-size: cover;
    }

    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;

    }

    .title {
      font-size: 84px;
    }

    .links > a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    .m-b-md {
      margin-bottom: 30px;
    }



    @media only screen and (max-width:640px)

    {
      body{width:auto!important;}
      table[class=main] {width:440px !important;}
      table[class=two-left] {width:420px !important; margin:0px auto;}
      table[class=full] {width:100% !important; margin:0px auto;}
      table[class=alaine] { text-align:center;}
      table[class=menu-space] {padding-right:0px;}
      table[class=banner] {width:438px !important;}
      table[class=menu] {width:438px !important; margin:0px auto; border-bottom:#e1e0e2 solid 1px;}
      table[class=date] {width:438px !important; margin:0px auto; text-align:center;}
      table[class=two-left-inner] {width:400px !important; margin:0px auto;}
      table[class=menu-icon] { display:block;}
      table[class=two-left-menu] {text-align:center;}

    }

    @media only screen and (max-width:479px)
    {
      body{width:auto!important;}
      table[class=main]  {width:310px !important;}
      table[class=two-left] {width:300px !important; margin:0px auto;}
      table[class=full] {width:100% !important; margin:0px auto;}
      table[class=alaine] { text-align:center;}
      table[class=menu-space] {padding-right:0px;}
      table[class=banner] {width:308px !important;}
      table[class=menu] {width:308px !important; margin:0px auto; border-bottom:#e1e0e2 solid 1px;}
      table[class=date] {width:308px !important; margin:0px auto; text-align:center;}
      table[class=two-left-inner] {width:280px !important; margin:0px auto;}
      table[class=menu-icon] { display:none;}
      table[class=two-left-menu] {width:310px !important; margin:0px auto;}


    }



  </style>

</head>

<body yahoo="fix" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


  <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
      @if (Auth::check())
      <a href="{{ url('/home') }}" style="font-family:'Open Sans', Verdana, Arial;  font-weight:bold; text-transform:uppercase; color:#FFF; line-height:60px;">Home</a>
      @else
      <a href="{{ url('/login') }}" style="font-family:'Open Sans', Verdana, Arial;  font-weight:bold; text-transform:uppercase; color:#FFF; line-height:60px;">Login</a>
      <a href="{{ url('/register') }}" style="font-family:'Open Sans', Verdana, Arial;  font-weight:bold; text-transform:uppercase; color:#FFF; line-height:60px;">Register</a>
      @endif
    </div>
    @endif

    <div class="content">
      <div class="title m-b-md" style="font-family:'Open Sans', Verdana, Arial;  font-weight:bold; text-transform:uppercase; color:#FFF; line-height:60px;" mc:edit="gm-04">
       Travel Planner
      </div>
      <small style="font-family:'Open Sans', Verdana, Arial; font-size:24px; font-weight:bold; text-transform:uppercase; color:#FFF; line-height:60px;">La Mejor Ruta</small>
    </div>
  </div>

  <!--Main Table Start-->

  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#242322" style="background:#242322;">
    <tr>
      <td align="center" valign="top">

        <repeater>

          <!--Banner 1 Start-->

          <layout label="1-Banner 1"> 

            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" mc:repeatable="Big Mail" mc:variant="1-Banner 1">
              <tr>
                <td align="center" valign="top"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
                  <tr>
                    <td height="675" align="center" valign="top" bgcolor="#999999" style="background: url(image/promo.jpg) #999999 top no-repeat;"><table width="615" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left-inner">
                      <tr>
                        <td height="80" align="left" valign="top" style="line-height:80px; font-size:80px;">&nbsp;</td>
                      </tr>
                      <tr>
                      
                        </tr>
                        <tr>
                          <td height="170" align="left" valign="top" style="line-height:170px; font-size:170px;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center" valign="top"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left-inner">
                            <tr>
                              <td align="center" valign="top" style="font-family:'Open Sans', Verdana, Arial; font-size:24px; font-weight:bold; text-transform:uppercase; color:#FFF; line-height:60px;" mc:edit="gm-04"><multiline>Las mejores rutas</multiline></td>
                            </tr>
                            <tr>
                              <td align="center" valign="top" style="font-family:'Open Sans', Verdana, Arial; font-size:44px; font-weight:bold; text-transform:uppercase; color:#FFF; line-height:70px;" mc:edit="gm-05"><multiline>de Viajeros para Viajeros</multiline></td>
                            </tr>
                            <tr>
                              <td align="center" valign="top"><table width="120" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td align="center" valign="top">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td height="40" align="center" valign="middle" style="background:#ff646b; -moz-border-radius: 25px; border-radius: 25px; font-family:'Open Sans', Verdana, Arial; font-size:14px; font-weight:bold; text-transform:uppercase; color:#FFF; " mc:edit="gm-06"><multiline><a href="{{ url('/register') }}" style="text-decoration:none; color:#FFF;">REGISTRATE</a></multiline></td>
                                </tr>
                              </table></td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                         <td height="80" align="left" valign="top" style="line-height:80px; font-size:80px;">&nbsp;</td>
                       </tr>

                     </table></td>
                   </tr>
                 </table></td>
               </tr>
             </table>

           </layout>

           <!--Banner 1 End-->





           <!--Banner 2 Start-->

           <layout label="3-Banner 2"> 

            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" mc:repeatable="Big Mail" mc:variant="3-Banner 2">
              <tr>
                <td align="center" valign="top"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
                  <tr>
                    <td height="550" align="center" valign="middle" bgcolor="#999999" style="background:url(http://cdn.revistagq.com/uploads/images/thumbs/es/gq/4/s/2015/52/ruta_66_7906_680x453.jpg) #999999 top no-repeat;"><table width="615" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left-inner">
                      <tr>
                       <td height="80" align="left" valign="top" style="line-height:80px; font-size:80px;">&nbsp;</td>
                     </tr>
                     <tr>
                      <td align="center" valign="top"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left-inner">
                        <tr>
                          <td align="center" valign="top" style="font-family:'Open Sans', Verdana, Arial; font-size:24px; font-weight:bold; text-transform:uppercase; color:#FFF; line-height:60px;" mc:edit="gm-09"><multiline>Ultimas 10 RUTAS</multiline></td>
                        </tr>
                        <tr>
                          <td align="center" valign="top" style="font-family:'Open Sans', Verdana, Arial; font-size:44px; font-weight:bold; text-transform:uppercase; color:#FFF; line-height:70px;" mc:edit="gm-10"><multiline>Creadas por viajeros</multiline></td>
                        </tr>

                      </table></td>
                    </tr>
                    <tr>
                     <td height="80" align="left" valign="top" style="line-height:80px; font-size:80px;">&nbsp;</td>
                   </tr>

                 </table></td>
               </tr>
             </table></td>
           </tr>
         </table>

       </layout>

       <!--Banner 2 End-->




       <!--service list 1 Start-->

       <layout label="7-service list 1"> 

        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" mc:repeatable="Big Mail" mc:variant="7-service list 1">
          <tr>
            <td align="center" valign="top"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
              <tr>
                <td align="center" valign="top" style="background:#f7f7f7;"><table width="615" border="0" align="center" cellpadding="0" cellspacing="0" class="full">
                  <tr>
                    <td align="left" valign="top" style="background:#FFF;">

                      <table width="300" border="0" align="left" cellpadding="0" cellspacing="0" class="full">
                        <tr>
                          <td align="left" valign="top"><img mc:edit="gm-29" editable="true"  src="http://placehold.it/300x225" width="300" height="225" alt="" style="display:block;width:100% !important; height:auto !important; " /></td>
                        </tr>
                      </table>
                      @foreach($trips as $trip)
                      <table width="275" border="0" align="right" cellpadding="0" cellspacing="0" class="two-left-inner">
                        <tr>
                          <td align="left" valign="top"><table width="240" border="0" align="left" cellpadding="0" cellspacing="0" class="two-left">

                           <tr>
                            <td height="40" align="left" valign="top" style="line-height:40px; font-size:40px;">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="top" style="font-family:'Open Sans', Verdana, Arial; font-size:26px; font-weight:normal; color:#242322; line-height:30px;" mc:edit="gm-30"><multiline>{{$trip->name}}</multiline></td>
                          </tr>
                          <tr>
                            <td height="15" align="left" valign="top" style="line-height:15px; font-size:15px;">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="top" style="font-family:'Open Sans', Verdana, Arial; font-size:13px; font-weight:normal; color:#666; line-height:28px;" mc:edit="gm-31"><multiline>{{$trip->comments}}</multiline></td>
                          </tr>
                          <tr>
                            <td height="17" align="left" valign="top" style="line-height:17px; font-size:17px;">&nbsp;</td>
                          </tr>
                          <tr>
                           <td align="left" valign="top" style="font-family:'Open Sans', Verdana, Arial; font-size:13px; font-weight:normal; color:#ff646b; line-height:22px;" mc:edit="gm-32"><multiline>READ MORE + </multiline></td>
                         </tr>
                         <tr>
                           <td height="17" align="left" valign="top" style="line-height:17px; font-size:17px;">&nbsp;</td>
                         </tr>
                       </table></td>
                     </tr>
                   </table>
                   @endforeach



                 </td>
               </tr>
             </table></td>
           </tr>
         </table></td>
       </tr>
     </table>

   </layout>

   <!--service list 1 End-->





<!--Footer 1 Part Start-->

<layout label="46-Footer 1 Part"> 

  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="main" mc:repeatable="Big Mail" mc:variant="46-Footer 1 Part">
    <tr>
      <td align="center" valign="top"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0" class="main">

       <tr>
        <td align="center" valign="bottom" bgcolor="#ff646b" style="background:#ff646b; line-height:">

          <table width="615" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left-inner">

            <tr>
              <td align="left" valign="top">

                <table width="280" border="0" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="two-left-inner">

                  <tr>
                    <td height="60" align="left" valign="top" style="font-size:60px; line-height:60px;">&nbsp;</td>
                  </tr>
                  
                  <tr>
                    <td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:28px; color:#FFF; font-weight:normal;" mc:edit="gm-186"><multiline>TravelPlanner Test</multiline></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" style="font-family:Verdana, Geneva, sans-serif; font-size:15px; font-weight:normal; color:#FFF; line-height:32px;padding-top:8px; padding-bottom:16px;" mc:edit="gm-187"><multiline>Esta es una prueba de los frameworks Laravel + AngularJS con Base de datos MySQL. para la Empresa 4Geeks Maracaibo</multiline></td>
                  </tr>

                  <tr>
                    <td align="left" valign="top"><table width="228" border="0" align="left" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="32" align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td align="center" valign="middle"><img mc:edit="gm-188" editable="true"  src="images/facebook.png" width="33" height="32" alt="" style="display:block;" /></td>
                          </tr>
                        </table></td>
                        <td width="32" align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td align="center" valign="middle"><img mc:edit="gm-189" editable="true"  src="images/twitter.png" width="33" height="32" alt="" style="display:block;" /></td>
                          </tr>
                        </table></td>
                        <td width="32" align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td align="center" valign="middle"><img mc:edit="gm-190" editable="true"  src="images/google.png" width="33" height="32" alt="" style="display:block;" /></td>
                          </tr>
                        </table></td>
                        <td width="32" align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td align="center" valign="middle"><img mc:edit="gm-191" editable="true"  src="images/rss.png" width="33" height="32" alt="" style="display:block;" /></td>
                          </tr>
                        </table></td>
                        <td width="32" align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td align="center" valign="middle"><img mc:edit="gm-192" editable="true"  src="images/youtube.png" width="33" height="32" alt="" style="display:block;" /></td>
                          </tr>
                        </table></td>
                        <td width="32" align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td align="center" valign="middle"><img mc:edit="gm-193" editable="true"  src="images/dribbble.png" width="33" height="32" alt="" style="display:block;" /></td>
                          </tr>
                        </table></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                
                
                <table width="280" border="0" align="right" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="two-left-inner">

                  <tr>
                    <td height="60" align="left" valign="top" style="font-size:60px; line-height:60px;">&nbsp;</td>
                  </tr>
                  
                  <tr>
                    <td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:28px; color:#FFF; font-weight:normal;" mc:edit="gm-194"><multiline>Contáctos</multiline></td>
                  </tr>
                  

                  
                  <tr>
                    <td align="left" valign="top" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal; color:#FFF; line-height:28px;" mc:edit="gm-197"><multiline><b>Mail us :</b> luis92pe@gmail.com</multiline></td>
                  </tr>
                </table>
                
                
              </td>
            </tr>

          </table>

        </td>
      </tr>
      <tr>
        <td align="center" valign="bottom" bgcolor="#ff646b" style="background:#ff646b;"><table width="615" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left-inner">
          <tr>
            <td height="60" align="left" valign="top" style="font-size:60px; line-height:60px; border-bottom:#f29397 solid 1px;">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top" style="border-top:#c5262d solid 1px;"><table border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td height="25" align="left" valign="top" style="line-height:25px; font-size:25px;">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal; color:#FFF; line-height:28px;" mc:edit="gm-198"><multiline>Copyright &copy; 2016 Big Mail.com . All rights reserved.</multiline> <unsubscribe>Unsubscribe</unsubscribe> <multiline>. Site Main Menu</multiline></td>
              </tr>

            </table></td>
          </tr>

        </table></td>
      </tr>
      <tr>
        <td height="30" align="left" valign="bottom" bgcolor="#ff646b" style="background:#ff646b; line-height:30px;">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

</layout>

<!--Footer 1 Part End-->

<!--Footer 2 social Part Start-->

<layout label="47-Footer 2 social Part"> 

  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" mc:repeatable="Big Mail" mc:variant="47-Footer 2 social Part">
    <tr>
      <td align="center" valign="top"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
        <tr>
          <td align="center" valign="top" style="background:#FFF;"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="25%" height="40" align="center" valign="middle" style="background:#0663d6;"><table width="26" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="center" valign="middle"><img mc:edit="gm-199" editable="true"  src="images/facebook2.png" width="26" height="26" alt="" /></td>
                </tr>
              </table></td>
              <td width="25%" height="40" align="center" valign="middle" style="background:#0ec9ff;"><table width="26" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="center" valign="middle"><img mc:edit="gm-200" editable="true"  src="images/twitter2.png" width="26" height="26" alt="" /></td>
                </tr>
              </table></td>
              <td width="25%" height="40" align="center" valign="middle" style="background:#ff630e;"><table width="26" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="center" valign="middle"><img mc:edit="gm-201" editable="true"  src="images/google2.png" width="26" height="26" alt="" /></td>
                </tr>
              </table></td>
              <td width="25%" height="40" align="center" valign="middle" style="background:#fd3d73;"><table width="26" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="center" valign="middle"><img mc:edit="gm-202" editable="true"  src="images/dribbble2.png" width="26" height="26" alt="" /></td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
  </table>

</layout>

</repeater>

<!--Footer 2 social Part End-->

<!--Footer 2 Start-->


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" mc:repeatable="Big Mail" mc:variant="48-Footer 2">
  <tr>
    <td align="center" valign="top"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
      <tr>
        <td align="center" valign="top" style="background:#FFF;"><table width="615" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left-inner">
          <tr>
            <td height="40" align="left" valign="top" style="font-size:40px; line-height:40px;">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top">

              <table border="0" align="left" cellpadding="0" cellspacing="0" class="two-left-inner">
                <tr>
                  <td align="left" valign="top"><img mc:edit="gm-203" editable="true"  src="images/footer-logo.png" width="185" height="50" alt="" /></td>
                </tr>
              </table>

              <table border="0" align="right" cellpadding="0" cellspacing="0" class="two-left-inner">
                <tr>
                  <td align="left" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="top" style="font-family:'Open Sans', Verdana, Arial; font-size:14px; font-weight:normal; color:#666; line-height:30px;" mc:edit="gm-204"><multiline> Copyright &copy; Big Mail.com . </multiline> <span style="color:#ff646b;"><unsubscribe>Unsubscribe</unsubscribe></span></td>
                </tr>
                <tr>
                  <td align="left" valign="top">&nbsp;</td>
                </tr>
              </table>


            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" style="font-size:25px; line-height:25px;">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>



<!--Footer 2 End-->


</td>
</tr>
</table>

<!--Main Table End-->

</body>

</html>

