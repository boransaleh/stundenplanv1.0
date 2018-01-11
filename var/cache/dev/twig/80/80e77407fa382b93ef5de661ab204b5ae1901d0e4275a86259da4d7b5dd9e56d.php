<?php

/* ::main.html.twig */
class __TwigTemplate_35ce63a75d5d51f974b68b4d21695888b355cc22bdb928b8e3b546ebe204fad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'SchuhleGroup' => array($this, 'block_SchuhleGroup'),
            'dozent_reports' => array($this, 'block_dozent_reports'),
            'group_reports' => array($this, 'block_group_reports'),
            'GroupNumber' => array($this, 'block_GroupNumber'),
            'DozentNumber' => array($this, 'block_DozentNumber'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e62b2a95a2ac260c794f6e770e5268444ae2ba2a89f154c7fffc7946ad8024b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62b2a95a2ac260c794f6e770e5268444ae2ba2a89f154c7fffc7946ad8024b5->enter($__internal_e62b2a95a2ac260c794f6e770e5268444ae2ba2a89f154c7fffc7946ad8024b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::main.html.twig"));

        $__internal_a1fc08f6f4fbac07844269ff846dedd72bb87133c6a1f9f8ae4f2a104ec70614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fc08f6f4fbac07844269ff846dedd72bb87133c6a1f9f8ae4f2a104ec70614->enter($__internal_a1fc08f6f4fbac07844269ff846dedd72bb87133c6a1f9f8ae4f2a104ec70614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::main.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 62
        echo "</head>
<body>

<div class=\"container-fluid display-table\">
    <div class=\"row display-table-row\">
        <!-- side menu -->
        <div class=\"col-md-2 col-sm-1 hidden-xs display-table-cell valign-top \" id=\"side-menu\">
            <h1 class=\"hidden-xs hidden-sm\">Stunden-Plan</h1>
            <ul>
                <li class=\"link active\">
                    <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\">
                        <span class=\"glyphicon glyphicon-th\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Dashboard</span>
                    </a>
                </li>

                <li class=\"link\">
                    <a href=\"#collapse-gruppen\" data-toggle=\"collapse\" aria-controls=\"collapse-gruppen\" >
                        <span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Stunden Plan</span>

                        <ul class=\"collapse collapseable\" id=\"collapse-gruppen\">
                            <li class=\"link\">
                                <a id='erstellen' href=\"#\">Erstellen</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search-calendar");
        echo "\">Drucken</a>
                            </li>
                        </ul>

                    </a>
                </li>

                <!--- select Schule Group Dialog -->


                <div class=\"modal fade\" id=\"SelectGroupDialog\"  tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\" >
                        <div class=\"modal-content\">

                            <div class=\"modal-header\" style=\"background-color:#293846;color: white; \">
                                <h4 class=\"modal-title\" id=\"myModalLabel\">Gruppen Liste</h4>
                            </div>

                            <div class=\"modal-body\">

                                ";
        // line 108
        $this->displayBlock('SchuhleGroup', $context, $blocks);
        // line 113
        echo "

                            </div>
                        </div>
                    </div>
                </div>

                <!--- end dialog --->

                <li class=\"link\">
                    <a href=\"#collapse-facher\" data-toggle=\"collapse\" aria-controls=\"collapse-facher\">
                        <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Fächer</span>
                        <ul class=\"collapse collapseable\" id=\"collapse-facher\">
                            <li class=\"link\">
                                <a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gesamt-fach");
        echo "\"> GesamtFach</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einzehl-fach");
        echo "\"> EinzelFach</a>
                            </li>
                        </ul>
                    </a>
                </li>


                <li class=\"link\">
                    <a href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dozent_show");
        echo "\">
                        <span class=\"glyphicon  glyphicon-user\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Verwaltung Dozenten</span>
                    </a>
                </li>

                <li class=\"link\">
                    <a href=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_show");
        echo "\">
                        <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Verwaltung Gruppen</span>
                    </a>
                </li>

                <li class=\"link\">
                    <a id='dozentBerichten' href=\"#\">
                        <span class=\"glyphicon glyphicon-cloud-download\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Berichten Exportieren</span>
                    </a>
                </li>

                <!--- export filter screen dozent report -->

                <div class=\"modal fade\" id=\"SelectfilterDozentDialog\" data-backdrop=\"static\" data-keyboard=\"false\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\" style=\"background-color:#293846;color: white; \">
                                <h4 class=\"modal-title\" id=\"myModalLabel\">Datum Wählen</h4>
                            </div>

                            <div class=\"modal-body\">

                                ";
        // line 170
        $this->displayBlock('dozent_reports', $context, $blocks);
        // line 173
        echo "

                            </div>
                        </div>
                    </div>
                </div>

                <!--- end dialog --->

                <li class=\"link\">
                    <a id='GruppenBerichten' href=\"#\">
                        <span class=\"glyphicon glyphicon-cloud-download\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Gruppen Berichten</span>
                    </a>
                </li>

                <!--- Select group for report form dialog  -->

                <div class=\"modal fade\" id=\"SelectGroupFormForReport\" data-backdrop=\"static\" data-keyboard=\"false\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\" style=\"background-color:#293846;color: white; \">
                                <h4 class=\"modal-title\" id=\"myModalLabel\">Wählen Sie die Gruppe , um zu berichten!</h4>
                            </div>

                            <div class=\"modal-body\">

                                ";
        // line 200
        $this->displayBlock('group_reports', $context, $blocks);
        // line 203
        echo "

                            </div>
                        </div>
                    </div>
                </div>

                <!--- end dialog --->


                <li class=\"link\">
                    <a href=\"";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("feirtage-view");
        echo "\">
                        <span class=\"glyphicon glyphicon-glass\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Feiertage</span>
                    </a>
                </li>

                ";
        // line 220
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 221
            echo "
                <li class=\"link\">
                    <a href=\"";
            // line 223
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("standort-manage");
            echo "\">
                        <span class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\"> StandOrt </span>
                    </a>
                </li>


                <li class=\"link\">
                    <a href=\"";
            // line 231
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show");
            echo "\">
                        <span class=\"glyphicon glyphicon-log-in
\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\"> Nutzer </span>
                    </a>
                </li>
                ";
        }
        // line 238
        echo "            </ul>
        </div>


        <!-- main content area -->
        <div class=\"col-md-10 col-sm-11 display-table-cell valign-top\">
            <div class=\"row\">
                <header id=\"nav-header\" class=\"clearfix\">
                    <!--  Content from the right side from header  -->
                    <div class=\"col-md-5\">
                        <nav class=\"navbar-default pull-left\">

                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"offcanvas\" data-target=\"#side-menu\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar top-bar\"></span>
                                <span class=\"icon-bar middle-bar\"></span>
                                <span class=\"icon-bar bottom-bar\"></span>
                            </button>

                        </nav>
                        <a class=\"navbar-brand pull-left hidden-xs\"  href=\"#\">
                            <img alt=\"Brand\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/wifa_logo_mistral.png"), "html", null, true);
        echo "\" width=\"45\" height=\"40\" >
                        </a>

                    </div>

                    <!--  Content from the left side from header  -->
                    <div class=\"col-lg-7\">
                        <ul class=\"pull-right\">
                            <li id=\"welcome\" class=\"hidden-xs\">Herzlich Willkommen <u>";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</u></li>
                            <li class=\"fixed-width\">
                                <a href=\"#\"  data-toggle=\"popover\"  data-trigger=\"hover\" data-placement=\"bottom\" data-content=\"Aktiv Gruppen Anzahl\">
                                    <span class=\"glyphicon glyphicon-list-alt hidden-xs\" aria-hidden=\"true\"></span>
                                    <span class=\"label label-group\">";
        // line 271
        $this->displayBlock('GroupNumber', $context, $blocks);
        // line 273
        echo "</span>
                                </a>
                            </li>
                            <li class=\"fixed-width\">
                                <a href=\"#\"  data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"bottom\" data-content=\"Aktiv Dozenten Anzahl\">
                                    <span class=\"glyphicon  glyphicon-user hidden-xs\" aria-hidden=\"true\"></span>
                                    <span class=\"label label-message\">";
        // line 279
        $this->displayBlock('DozentNumber', $context, $blocks);
        // line 281
        echo "</span>
                                </a>
                            </li>
                            <li class=\"\">
                                <a href=\"";
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
        echo "\" class=\"logout\">
                                    <span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"></span>
                                    Abmelden
                                </a>
                            </li>
                        </ul>

                    </div>

                </header>

            </div>

            ";
        // line 298
        $this->displayBlock('body', $context, $blocks);
        // line 299
        echo "

            <div class=\"row\">
                <footer id=\"admin-footer\" class=\"clearfix\">
                    <div class=\"pull-left\"><b>Kölner Wirtschaftsfachschule Copyright</b> &copy; 2017</div>
                    <div class=\"pull-right\">Stunden Plan System</div>
                </footer>
            </div>


        </div>
    </div>
</div>

<div id=\"errorModal\" class=\"modal fade \" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color:#d9534f;color: white; \">
                <h4 class=\"modal-title\">Fehler!</h4>
            </div>
            <div class=\"modal-body\">
                <p>Wählen Sie bitte ein gültiges Datum!</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Ok</button>
            </div>
        </div>

    </div>
</div>

";
        // line 332
        $this->displayBlock('footer', $context, $blocks);
        // line 540
        echo "



</body>
</html>";
        
        $__internal_e62b2a95a2ac260c794f6e770e5268444ae2ba2a89f154c7fffc7946ad8024b5->leave($__internal_e62b2a95a2ac260c794f6e770e5268444ae2ba2a89f154c7fffc7946ad8024b5_prof);

        
        $__internal_a1fc08f6f4fbac07844269ff846dedd72bb87133c6a1f9f8ae4f2a104ec70614->leave($__internal_a1fc08f6f4fbac07844269ff846dedd72bb87133c6a1f9f8ae4f2a104ec70614_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_f779f19e7c85fabc5f6719eeaa006e89c0eac20f2d4e5d8f887b9c01c48bccd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f779f19e7c85fabc5f6719eeaa006e89c0eac20f2d4e5d8f887b9c01c48bccd1->enter($__internal_f779f19e7c85fabc5f6719eeaa006e89c0eac20f2d4e5d8f887b9c01c48bccd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_81c403a23d39ceb8070327bcdefcbcb6bfafab8ba5a08682a5abee98989dac31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c403a23d39ceb8070327bcdefcbcb6bfafab8ba5a08682a5abee98989dac31->enter($__internal_81c403a23d39ceb8070327bcdefcbcb6bfafab8ba5a08682a5abee98989dac31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_81c403a23d39ceb8070327bcdefcbcb6bfafab8ba5a08682a5abee98989dac31->leave($__internal_81c403a23d39ceb8070327bcdefcbcb6bfafab8ba5a08682a5abee98989dac31_prof);

        
        $__internal_f779f19e7c85fabc5f6719eeaa006e89c0eac20f2d4e5d8f887b9c01c48bccd1->leave($__internal_f779f19e7c85fabc5f6719eeaa006e89c0eac20f2d4e5d8f887b9c01c48bccd1_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_60654f61302424820011ba06e4c963ac7d462cd4a2db50171c4c60b0fb09ab21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60654f61302424820011ba06e4c963ac7d462cd4a2db50171c4c60b0fb09ab21->enter($__internal_60654f61302424820011ba06e4c963ac7d462cd4a2db50171c4c60b0fb09ab21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_fd36c190c835cd44376aa4838801361b219e68db9ca76f27f316acc62f29087f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd36c190c835cd44376aa4838801361b219e68db9ca76f27f316acc62f29087f->enter($__internal_fd36c190c835cd44376aa4838801361b219e68db9ca76f27f316acc62f29087f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 10
        echo "
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>

        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.de.min.js"), "html", null, true);
        echo "\"></script>


        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/daterangepicker.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-editable.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/featherlight.min.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\">
        <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">


        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment-with-locales.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/daterangepicker.min.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sum().js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-dialog.min.js"), "html", null, true);
        echo "\"></script>
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrapValidator.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrapValidator.js"), "html", null, true);
        echo "\"></script>




        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-editable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/featherlight.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sgdatatables/js/pipeline.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/Chart.min.js"), "html", null, true);
        echo "\"></script>







        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    ";
        
        $__internal_fd36c190c835cd44376aa4838801361b219e68db9ca76f27f316acc62f29087f->leave($__internal_fd36c190c835cd44376aa4838801361b219e68db9ca76f27f316acc62f29087f_prof);

        
        $__internal_60654f61302424820011ba06e4c963ac7d462cd4a2db50171c4c60b0fb09ab21->leave($__internal_60654f61302424820011ba06e4c963ac7d462cd4a2db50171c4c60b0fb09ab21_prof);

    }

    // line 108
    public function block_SchuhleGroup($context, array $blocks = array())
    {
        $__internal_e02b65a5a899d33f45eab7524b02efcfda089e9c567371365f45c88e53ab913c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02b65a5a899d33f45eab7524b02efcfda089e9c567371365f45c88e53ab913c->enter($__internal_e02b65a5a899d33f45eab7524b02efcfda089e9c567371365f45c88e53ab913c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SchuhleGroup"));

        $__internal_51be376a6ff257bc29afc429e81db70b96f005bb5654f9993babcf988a3be352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51be376a6ff257bc29afc429e81db70b96f005bb5654f9993babcf988a3be352->enter($__internal_51be376a6ff257bc29afc429e81db70b96f005bb5654f9993babcf988a3be352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SchuhleGroup"));

        // line 109
        echo "
                                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:LayoutDataGetter:ErstellenGroupCalendarForm"));
        echo "

                                ";
        
        $__internal_51be376a6ff257bc29afc429e81db70b96f005bb5654f9993babcf988a3be352->leave($__internal_51be376a6ff257bc29afc429e81db70b96f005bb5654f9993babcf988a3be352_prof);

        
        $__internal_e02b65a5a899d33f45eab7524b02efcfda089e9c567371365f45c88e53ab913c->leave($__internal_e02b65a5a899d33f45eab7524b02efcfda089e9c567371365f45c88e53ab913c_prof);

    }

    // line 170
    public function block_dozent_reports($context, array $blocks = array())
    {
        $__internal_78ba535206a24c068c6c4c74ea903cc6625bdedf9bb37fe3ce281507efefb28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ba535206a24c068c6c4c74ea903cc6625bdedf9bb37fe3ce281507efefb28b->enter($__internal_78ba535206a24c068c6c4c74ea903cc6625bdedf9bb37fe3ce281507efefb28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dozent_reports"));

        $__internal_35f6436d71a3d11ddcbddbcfb8f44c6b6b97cdd9f3077ffe6f02a1bba2ec3b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f6436d71a3d11ddcbddbcfb8f44c6b6b97cdd9f3077ffe6f02a1bba2ec3b15->enter($__internal_35f6436d71a3d11ddcbddbcfb8f44c6b6b97cdd9f3077ffe6f02a1bba2ec3b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dozent_reports"));

        // line 171
        echo "                                 ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Berichten:getfromToDateForm"));
        echo "
                                ";
        
        $__internal_35f6436d71a3d11ddcbddbcfb8f44c6b6b97cdd9f3077ffe6f02a1bba2ec3b15->leave($__internal_35f6436d71a3d11ddcbddbcfb8f44c6b6b97cdd9f3077ffe6f02a1bba2ec3b15_prof);

        
        $__internal_78ba535206a24c068c6c4c74ea903cc6625bdedf9bb37fe3ce281507efefb28b->leave($__internal_78ba535206a24c068c6c4c74ea903cc6625bdedf9bb37fe3ce281507efefb28b_prof);

    }

    // line 200
    public function block_group_reports($context, array $blocks = array())
    {
        $__internal_d396ee2c5851d5619722b1b2b71a12c27ef56a5e9740f1203a325d37b6e1ed0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d396ee2c5851d5619722b1b2b71a12c27ef56a5e9740f1203a325d37b6e1ed0a->enter($__internal_d396ee2c5851d5619722b1b2b71a12c27ef56a5e9740f1203a325d37b6e1ed0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "group_reports"));

        $__internal_3da14bb62d006f8c0c5c28469e5267304f7552530b586aa9a7be8f0727b78b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da14bb62d006f8c0c5c28469e5267304f7552530b586aa9a7be8f0727b78b1f->enter($__internal_3da14bb62d006f8c0c5c28469e5267304f7552530b586aa9a7be8f0727b78b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "group_reports"));

        // line 201
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:LayoutDataGetter:GroupBerichtenFormRender"));
        echo "
                                ";
        
        $__internal_3da14bb62d006f8c0c5c28469e5267304f7552530b586aa9a7be8f0727b78b1f->leave($__internal_3da14bb62d006f8c0c5c28469e5267304f7552530b586aa9a7be8f0727b78b1f_prof);

        
        $__internal_d396ee2c5851d5619722b1b2b71a12c27ef56a5e9740f1203a325d37b6e1ed0a->leave($__internal_d396ee2c5851d5619722b1b2b71a12c27ef56a5e9740f1203a325d37b6e1ed0a_prof);

    }

    // line 271
    public function block_GroupNumber($context, array $blocks = array())
    {
        $__internal_27f21e3faf99bf8629260197f0eee255f3e534efbb4fd7aa03eeddc6cec22a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f21e3faf99bf8629260197f0eee255f3e534efbb4fd7aa03eeddc6cec22a9f->enter($__internal_27f21e3faf99bf8629260197f0eee255f3e534efbb4fd7aa03eeddc6cec22a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GroupNumber"));

        $__internal_f42070b9fa41070e355efe9b0f662d16eac882c6d4a388318c7d4b26410eb4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42070b9fa41070e355efe9b0f662d16eac882c6d4a388318c7d4b26410eb4be->enter($__internal_f42070b9fa41070e355efe9b0f662d16eac882c6d4a388318c7d4b26410eb4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GroupNumber"));

        // line 272
        echo "                                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:LayoutDataGetter:getGroupCount"));
        echo "
                                        ";
        
        $__internal_f42070b9fa41070e355efe9b0f662d16eac882c6d4a388318c7d4b26410eb4be->leave($__internal_f42070b9fa41070e355efe9b0f662d16eac882c6d4a388318c7d4b26410eb4be_prof);

        
        $__internal_27f21e3faf99bf8629260197f0eee255f3e534efbb4fd7aa03eeddc6cec22a9f->leave($__internal_27f21e3faf99bf8629260197f0eee255f3e534efbb4fd7aa03eeddc6cec22a9f_prof);

    }

    // line 279
    public function block_DozentNumber($context, array $blocks = array())
    {
        $__internal_408157f1e51f7d6b01e610b19ae4d102d2003ec32dc600f41e61b9722b0682f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408157f1e51f7d6b01e610b19ae4d102d2003ec32dc600f41e61b9722b0682f1->enter($__internal_408157f1e51f7d6b01e610b19ae4d102d2003ec32dc600f41e61b9722b0682f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "DozentNumber"));

        $__internal_bbf343ac0db3c4ea4104b4ea66785856968dc30ec74fa6bdd4d0e1c9dbbbcb84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf343ac0db3c4ea4104b4ea66785856968dc30ec74fa6bdd4d0e1c9dbbbcb84->enter($__internal_bbf343ac0db3c4ea4104b4ea66785856968dc30ec74fa6bdd4d0e1c9dbbbcb84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "DozentNumber"));

        // line 280
        echo "                                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:LayoutDataGetter:getDozentCount"));
        echo "
                                        ";
        
        $__internal_bbf343ac0db3c4ea4104b4ea66785856968dc30ec74fa6bdd4d0e1c9dbbbcb84->leave($__internal_bbf343ac0db3c4ea4104b4ea66785856968dc30ec74fa6bdd4d0e1c9dbbbcb84_prof);

        
        $__internal_408157f1e51f7d6b01e610b19ae4d102d2003ec32dc600f41e61b9722b0682f1->leave($__internal_408157f1e51f7d6b01e610b19ae4d102d2003ec32dc600f41e61b9722b0682f1_prof);

    }

    // line 298
    public function block_body($context, array $blocks = array())
    {
        $__internal_560be02602d21644b7bf64f345c3198ded39fa4965d2960bff001f7f5be8e16b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560be02602d21644b7bf64f345c3198ded39fa4965d2960bff001f7f5be8e16b->enter($__internal_560be02602d21644b7bf64f345c3198ded39fa4965d2960bff001f7f5be8e16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8e6a352bb1103580cd0e82de83693d722d88f43885856d5bf5b50989034dda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e6a352bb1103580cd0e82de83693d722d88f43885856d5bf5b50989034dda0->enter($__internal_e8e6a352bb1103580cd0e82de83693d722d88f43885856d5bf5b50989034dda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e8e6a352bb1103580cd0e82de83693d722d88f43885856d5bf5b50989034dda0->leave($__internal_e8e6a352bb1103580cd0e82de83693d722d88f43885856d5bf5b50989034dda0_prof);

        
        $__internal_560be02602d21644b7bf64f345c3198ded39fa4965d2960bff001f7f5be8e16b->leave($__internal_560be02602d21644b7bf64f345c3198ded39fa4965d2960bff001f7f5be8e16b_prof);

    }

    // line 332
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f960710506e9535cfc0529120ef1e8c909c09af9fe3e8b5f50f250ee762dafc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f960710506e9535cfc0529120ef1e8c909c09af9fe3e8b5f50f250ee762dafc3->enter($__internal_f960710506e9535cfc0529120ef1e8c909c09af9fe3e8b5f50f250ee762dafc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6ac13c409127c14cf219c5497826f241eac00502bc51e92d231a323f2cee98b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac13c409127c14cf219c5497826f241eac00502bc51e92d231a323f2cee98b3->enter($__internal_6ac13c409127c14cf219c5497826f241eac00502bc51e92d231a323f2cee98b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 333
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/default.js"), "html", null, true);
        echo "\"></script>


    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('[data-toggle=\"popover\"]').popover();
        });
        \$(document).ready(function () {
            \$('.js-datepicker-to').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});
            \$('.js-datepicker-from').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});
            \$('[data-toggle=\"popover\"]').popover();

        });

        \$(document).ready(function () {
                    \$('#selectgroup').bootstrapValidator({

                        fields: {

                            'shuhle_groups_form[schuleGroup]': {

                                validators: {

                                    notEmpty: {
                                        message:'Bitte einen gültigen Wert eingeben'

                                    }

                                }
                            }

                        }


                    });
            \$('#groupBerichtenForm').bootstrapValidator({

                fields: {

                    'select_groupfor_berichten_form[schuleGroup]': {

                        validators: {

                            notEmpty: {
                                message: 'Bitte einen gültigen Wert eingeben'

                            }

                        }
                    }

                }


            });



            \$('#suchenReport').bootstrapValidator({


                fields: {
                    'drucken_query_form[fromDate]': {

                        validators: {

                            notEmpty: {
                                message:'Bitte einen gültigen Wert eingeben'

                            }

                        }
                    },
                    'drucken_query_form[toDate]': {

                        validators: {

                            notEmpty: {
                                message:'Bitte einen gültigen Wert eingeben'

                            }

                        }
                    }

                }
            });
                });


        \$(document).ready(function() {

            var to=null;
            var from=null;

            \$('.js-datepicker-to').datepicker()
                    .on('changeDate', function(e) {
                        to=e.date;
                        \$('#suchenB').prop('disabled', false);
                        \$('#suchenReport').bootstrapValidator();
                    });


            \$('.js-datepicker-from').datepicker()
                    .on('changeDate', function(e) {
                        from=e.date;
                        \$('#suchenB').prop('disabled', false);
                        \$('#suchenReport').bootstrapValidator();
                    });

            \$('#suchenB').on('click',function(){

                var fromdate = new moment(from);
                if (!fromdate.isBefore(to) && !fromdate.isSame(to)){
                    \$('#errorModal').modal('show');
                    \$(\"#suchenReport\").submit(function(e){
                        e.preventDefault();
                    });
                }

                else{

                    \$('#suchenReport').unbind('submit');
                }
            });
        });


        \$(document).ready(function() {

            var aus=null;
            var ein=null;

            \$('.js-datepicker-aus').datepicker()
                    .on('changeDate', function(e) {
                        aus=e.date;
                        \$('#add_sgroup').prop('disabled', false);

                    });


            \$('.js-datepicker-ein').datepicker()
                    .on('changeDate', function(e) {
                        ein=e.date;
                        \$('#add_sgroup').prop('disabled', false);

                    });

            \$('#add_sgroup').on('click',function(){

                \$(\"#groupform\").submit(function(e){
                    e.preventDefault();
                });

                var validator = \$('#groupform').data('bootstrapValidator');
                var isDateOk=true;
                validator.validate();

                var fromdate = new moment(ein);
                if (!fromdate.isBefore(aus) && !fromdate.isSame(aus)){
                    \$('#errorModal').modal('show');
                    isDateOk=false;

                }

                if (validator.isValid() && isDateOk) {
                    var data = \$('#groupform').serializeArray();
                    console.log(data);
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 503
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_group");
        echo "\",
                        data: data,
                        dataType: \"json\",
                        beforeSend: function () {
                            \$('#pleaseWaitDialog').modal('show');
                        },
                        complete: function () {
                            \$('#pleaseWaitDialog').modal('hide');
                        },
                        success: function (response) {
                            var table = \$('#sg-datatables-schulegroup_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#groupform').bootstrapValidator('resetForm', true);
                            \$('#feedback').html('');
                        },
                        error: function (response) {

                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong!!</div>');
                        }
                    });
                }

                else {
                    return;
                }

            });
        });


    </script>




";
        
        $__internal_6ac13c409127c14cf219c5497826f241eac00502bc51e92d231a323f2cee98b3->leave($__internal_6ac13c409127c14cf219c5497826f241eac00502bc51e92d231a323f2cee98b3_prof);

        
        $__internal_f960710506e9535cfc0529120ef1e8c909c09af9fe3e8b5f50f250ee762dafc3->leave($__internal_f960710506e9535cfc0529120ef1e8c909c09af9fe3e8b5f50f250ee762dafc3_prof);

    }

    public function getTemplateName()
    {
        return "::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  868 => 503,  694 => 333,  685 => 332,  668 => 298,  655 => 280,  646 => 279,  633 => 272,  624 => 271,  611 => 201,  602 => 200,  589 => 171,  580 => 170,  567 => 110,  564 => 109,  555 => 108,  530 => 47,  526 => 46,  522 => 45,  518 => 44,  514 => 43,  510 => 42,  502 => 37,  498 => 36,  494 => 35,  490 => 34,  486 => 33,  482 => 32,  478 => 31,  474 => 30,  467 => 26,  463 => 25,  459 => 24,  455 => 23,  451 => 22,  447 => 21,  443 => 20,  437 => 17,  433 => 16,  429 => 15,  425 => 14,  421 => 13,  416 => 11,  413 => 10,  404 => 9,  387 => 8,  372 => 540,  370 => 332,  335 => 299,  333 => 298,  317 => 285,  311 => 281,  309 => 279,  301 => 273,  299 => 271,  292 => 267,  281 => 259,  258 => 238,  248 => 231,  237 => 223,  233 => 221,  231 => 220,  222 => 214,  209 => 203,  207 => 200,  178 => 173,  176 => 170,  149 => 146,  139 => 139,  128 => 131,  122 => 128,  105 => 113,  103 => 108,  80 => 88,  61 => 72,  49 => 62,  47 => 9,  43 => 8,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}{% endblock %}</title>
    {% block header %}

        <script src=\"{{ asset(\"js/moment.min.js\") }}\"></script>

        <link href=\"{{asset('css/bootstrap-datepicker.min.css') }}\" rel=\"stylesheet\">
        <script src=\"{{ asset(\"js/jquery-1.9.1.js\") }}\"></script>
        <script src=\"{{asset('js/bootstrap.min.js') }}\"></script>
        <script src=\"{{asset('js/bootstrap-datepicker.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('js/bootstrap-datepicker.de.min.js') }}\"></script>


        <link rel=\"stylesheet\" href=\"{{ asset(\"css/datatables.min.css\") }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\"css/font-awesome.min.css\") }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\"css/daterangepicker.min.css\") }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\"css/bootstrap-editable.css\") }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\"css/featherlight.min.css\") }}\">
        <link href=\"{{ asset(\"css/bootstrap.min.css\") }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"css/default.css\") }}\">
        <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">


        <script src=\"{{ asset(\"js/bootstrap.min.js\") }}\"></script>
        <script src=\"{{ asset(\"js/moment-with-locales.min.js\") }}\"></script>
        <script src=\"{{ asset(\"js/daterangepicker.min.js\") }}\" charset=\"UTF-8\"></script>
        <script src=\"{{ asset(\"js/datatables.min.js\") }}\"></script>
        <script src=\"{{ asset(\"js/sum().js\") }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-dialog.min.js') }}\"></script>
        <link href=\"{{ asset('css/bootstrapValidator.css') }}\" rel=\"stylesheet\">
        <script src=\"{{ asset('js/bootstrapValidator.js') }}\"></script>




        <script src=\"{{ asset(\"js/bootstrap-editable.min.js\") }}\"></script>
        <script src=\"{{ asset(\"js/featherlight.min.js\") }}\"></script>
        <script src=\"{{ asset('bundles/sgdatatables/js/pipeline.js') }}\"></script>
        <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
        <script src=\"{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}\"></script>
        <script src=\"{{ asset(\"js/Chart.min.js\") }}\"></script>







        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    {% endblock %}
</head>
<body>

<div class=\"container-fluid display-table\">
    <div class=\"row display-table-row\">
        <!-- side menu -->
        <div class=\"col-md-2 col-sm-1 hidden-xs display-table-cell valign-top \" id=\"side-menu\">
            <h1 class=\"hidden-xs hidden-sm\">Stunden-Plan</h1>
            <ul>
                <li class=\"link active\">
                    <a href=\"{{ path('dashboard') }}\">
                        <span class=\"glyphicon glyphicon-th\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Dashboard</span>
                    </a>
                </li>

                <li class=\"link\">
                    <a href=\"#collapse-gruppen\" data-toggle=\"collapse\" aria-controls=\"collapse-gruppen\" >
                        <span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Stunden Plan</span>

                        <ul class=\"collapse collapseable\" id=\"collapse-gruppen\">
                            <li class=\"link\">
                                <a id='erstellen' href=\"#\">Erstellen</a>
                            </li>
                            <li>
                                <a href=\"{{ path('search-calendar') }}\">Drucken</a>
                            </li>
                        </ul>

                    </a>
                </li>

                <!--- select Schule Group Dialog -->


                <div class=\"modal fade\" id=\"SelectGroupDialog\"  tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\" >
                        <div class=\"modal-content\">

                            <div class=\"modal-header\" style=\"background-color:#293846;color: white; \">
                                <h4 class=\"modal-title\" id=\"myModalLabel\">Gruppen Liste</h4>
                            </div>

                            <div class=\"modal-body\">

                                {% block SchuhleGroup %}

                                    {{ render(controller('AppBundle:LayoutDataGetter:ErstellenGroupCalendarForm')) }}

                                {% endblock %}


                            </div>
                        </div>
                    </div>
                </div>

                <!--- end dialog --->

                <li class=\"link\">
                    <a href=\"#collapse-facher\" data-toggle=\"collapse\" aria-controls=\"collapse-facher\">
                        <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Fächer</span>
                        <ul class=\"collapse collapseable\" id=\"collapse-facher\">
                            <li class=\"link\">
                                <a href=\"{{ path('gesamt-fach') }}\"> GesamtFach</a>
                            </li>
                            <li>
                                <a href=\"{{ path('einzehl-fach') }}\"> EinzelFach</a>
                            </li>
                        </ul>
                    </a>
                </li>


                <li class=\"link\">
                    <a href=\"{{ path('dozent_show') }}\">
                        <span class=\"glyphicon  glyphicon-user\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Verwaltung Dozenten</span>
                    </a>
                </li>

                <li class=\"link\">
                    <a href=\"{{ path('group_show') }}\">
                        <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Verwaltung Gruppen</span>
                    </a>
                </li>

                <li class=\"link\">
                    <a id='dozentBerichten' href=\"#\">
                        <span class=\"glyphicon glyphicon-cloud-download\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Berichten Exportieren</span>
                    </a>
                </li>

                <!--- export filter screen dozent report -->

                <div class=\"modal fade\" id=\"SelectfilterDozentDialog\" data-backdrop=\"static\" data-keyboard=\"false\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\" style=\"background-color:#293846;color: white; \">
                                <h4 class=\"modal-title\" id=\"myModalLabel\">Datum Wählen</h4>
                            </div>

                            <div class=\"modal-body\">

                                {% block dozent_reports %}
                                 {{ render(controller('AppBundle:Berichten:getfromToDateForm')) }}
                                {% endblock %}


                            </div>
                        </div>
                    </div>
                </div>

                <!--- end dialog --->

                <li class=\"link\">
                    <a id='GruppenBerichten' href=\"#\">
                        <span class=\"glyphicon glyphicon-cloud-download\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Gruppen Berichten</span>
                    </a>
                </li>

                <!--- Select group for report form dialog  -->

                <div class=\"modal fade\" id=\"SelectGroupFormForReport\" data-backdrop=\"static\" data-keyboard=\"false\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\" style=\"background-color:#293846;color: white; \">
                                <h4 class=\"modal-title\" id=\"myModalLabel\">Wählen Sie die Gruppe , um zu berichten!</h4>
                            </div>

                            <div class=\"modal-body\">

                                {% block group_reports %}
                                    {{ render(controller('AppBundle:LayoutDataGetter:GroupBerichtenFormRender')) }}
                                {% endblock %}


                            </div>
                        </div>
                    </div>
                </div>

                <!--- end dialog --->


                <li class=\"link\">
                    <a href=\"{{ path('feirtage-view') }}\">
                        <span class=\"glyphicon glyphicon-glass\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\">Feiertage</span>
                    </a>
                </li>

                {% if is_granted('ROLE_ADMIN') %}

                <li class=\"link\">
                    <a href=\"{{ path('standort-manage') }}\">
                        <span class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\"> StandOrt </span>
                    </a>
                </li>


                <li class=\"link\">
                    <a href=\"{{ path('user_show') }}\">
                        <span class=\"glyphicon glyphicon-log-in
\" aria-hidden=\"true\"></span>
                        <span class=\"hidden-xs hidden-sm\"> Nutzer </span>
                    </a>
                </li>
                {% endif %}
            </ul>
        </div>


        <!-- main content area -->
        <div class=\"col-md-10 col-sm-11 display-table-cell valign-top\">
            <div class=\"row\">
                <header id=\"nav-header\" class=\"clearfix\">
                    <!--  Content from the right side from header  -->
                    <div class=\"col-md-5\">
                        <nav class=\"navbar-default pull-left\">

                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"offcanvas\" data-target=\"#side-menu\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar top-bar\"></span>
                                <span class=\"icon-bar middle-bar\"></span>
                                <span class=\"icon-bar bottom-bar\"></span>
                            </button>

                        </nav>
                        <a class=\"navbar-brand pull-left hidden-xs\"  href=\"#\">
                            <img alt=\"Brand\" src=\"{{ asset('img/wifa_logo_mistral.png') }}\" width=\"45\" height=\"40\" >
                        </a>

                    </div>

                    <!--  Content from the left side from header  -->
                    <div class=\"col-lg-7\">
                        <ul class=\"pull-right\">
                            <li id=\"welcome\" class=\"hidden-xs\">Herzlich Willkommen <u>{{ app.user.email }}</u></li>
                            <li class=\"fixed-width\">
                                <a href=\"#\"  data-toggle=\"popover\"  data-trigger=\"hover\" data-placement=\"bottom\" data-content=\"Aktiv Gruppen Anzahl\">
                                    <span class=\"glyphicon glyphicon-list-alt hidden-xs\" aria-hidden=\"true\"></span>
                                    <span class=\"label label-group\">{% block GroupNumber %}
                                        {{ render(controller('AppBundle:LayoutDataGetter:getGroupCount')) }}
                                        {% endblock %}</span>
                                </a>
                            </li>
                            <li class=\"fixed-width\">
                                <a href=\"#\"  data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"bottom\" data-content=\"Aktiv Dozenten Anzahl\">
                                    <span class=\"glyphicon  glyphicon-user hidden-xs\" aria-hidden=\"true\"></span>
                                    <span class=\"label label-message\">{% block DozentNumber %}
                                        {{ render(controller('AppBundle:LayoutDataGetter:getDozentCount')) }}
                                        {% endblock %}</span>
                                </a>
                            </li>
                            <li class=\"\">
                                <a href=\"{{ path('security_logout') }}\" class=\"logout\">
                                    <span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"></span>
                                    Abmelden
                                </a>
                            </li>
                        </ul>

                    </div>

                </header>

            </div>

            {% block body %}{% endblock %}


            <div class=\"row\">
                <footer id=\"admin-footer\" class=\"clearfix\">
                    <div class=\"pull-left\"><b>Kölner Wirtschaftsfachschule Copyright</b> &copy; 2017</div>
                    <div class=\"pull-right\">Stunden Plan System</div>
                </footer>
            </div>


        </div>
    </div>
</div>

<div id=\"errorModal\" class=\"modal fade \" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color:#d9534f;color: white; \">
                <h4 class=\"modal-title\">Fehler!</h4>
            </div>
            <div class=\"modal-body\">
                <p>Wählen Sie bitte ein gültiges Datum!</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Ok</button>
            </div>
        </div>

    </div>
</div>

{% block footer %}
    <script src=\"{{ asset(\"js/default.js\") }}\"></script>


    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('[data-toggle=\"popover\"]').popover();
        });
        \$(document).ready(function () {
            \$('.js-datepicker-to').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});
            \$('.js-datepicker-from').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});
            \$('[data-toggle=\"popover\"]').popover();

        });

        \$(document).ready(function () {
                    \$('#selectgroup').bootstrapValidator({

                        fields: {

                            'shuhle_groups_form[schuleGroup]': {

                                validators: {

                                    notEmpty: {
                                        message:'Bitte einen gültigen Wert eingeben'

                                    }

                                }
                            }

                        }


                    });
            \$('#groupBerichtenForm').bootstrapValidator({

                fields: {

                    'select_groupfor_berichten_form[schuleGroup]': {

                        validators: {

                            notEmpty: {
                                message: 'Bitte einen gültigen Wert eingeben'

                            }

                        }
                    }

                }


            });



            \$('#suchenReport').bootstrapValidator({


                fields: {
                    'drucken_query_form[fromDate]': {

                        validators: {

                            notEmpty: {
                                message:'Bitte einen gültigen Wert eingeben'

                            }

                        }
                    },
                    'drucken_query_form[toDate]': {

                        validators: {

                            notEmpty: {
                                message:'Bitte einen gültigen Wert eingeben'

                            }

                        }
                    }

                }
            });
                });


        \$(document).ready(function() {

            var to=null;
            var from=null;

            \$('.js-datepicker-to').datepicker()
                    .on('changeDate', function(e) {
                        to=e.date;
                        \$('#suchenB').prop('disabled', false);
                        \$('#suchenReport').bootstrapValidator();
                    });


            \$('.js-datepicker-from').datepicker()
                    .on('changeDate', function(e) {
                        from=e.date;
                        \$('#suchenB').prop('disabled', false);
                        \$('#suchenReport').bootstrapValidator();
                    });

            \$('#suchenB').on('click',function(){

                var fromdate = new moment(from);
                if (!fromdate.isBefore(to) && !fromdate.isSame(to)){
                    \$('#errorModal').modal('show');
                    \$(\"#suchenReport\").submit(function(e){
                        e.preventDefault();
                    });
                }

                else{

                    \$('#suchenReport').unbind('submit');
                }
            });
        });


        \$(document).ready(function() {

            var aus=null;
            var ein=null;

            \$('.js-datepicker-aus').datepicker()
                    .on('changeDate', function(e) {
                        aus=e.date;
                        \$('#add_sgroup').prop('disabled', false);

                    });


            \$('.js-datepicker-ein').datepicker()
                    .on('changeDate', function(e) {
                        ein=e.date;
                        \$('#add_sgroup').prop('disabled', false);

                    });

            \$('#add_sgroup').on('click',function(){

                \$(\"#groupform\").submit(function(e){
                    e.preventDefault();
                });

                var validator = \$('#groupform').data('bootstrapValidator');
                var isDateOk=true;
                validator.validate();

                var fromdate = new moment(ein);
                if (!fromdate.isBefore(aus) && !fromdate.isSame(aus)){
                    \$('#errorModal').modal('show');
                    isDateOk=false;

                }

                if (validator.isValid() && isDateOk) {
                    var data = \$('#groupform').serializeArray();
                    console.log(data);
                    \$.ajax({
                        type: \"POST\",
                        url: \"{{ path('save_group') }}\",
                        data: data,
                        dataType: \"json\",
                        beforeSend: function () {
                            \$('#pleaseWaitDialog').modal('show');
                        },
                        complete: function () {
                            \$('#pleaseWaitDialog').modal('hide');
                        },
                        success: function (response) {
                            var table = \$('#sg-datatables-schulegroup_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#groupform').bootstrapValidator('resetForm', true);
                            \$('#feedback').html('');
                        },
                        error: function (response) {

                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong!!</div>');
                        }
                    });
                }

                else {
                    return;
                }

            });
        });


    </script>




{% endblock %}




</body>
</html>", "::main.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/main.html.twig");
    }
}
