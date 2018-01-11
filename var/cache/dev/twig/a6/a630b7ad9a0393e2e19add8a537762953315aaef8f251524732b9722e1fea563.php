<?php

/* main.html.twig */
class __TwigTemplate_e9e4250f8cff79106501a2d3fe9ea4d7de4a919cb4523f01bff63ff39b132a82 extends Twig_Template
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
        $__internal_663beb2463b47f159021d6e7e704077c1373c9b7cc3c2a304535f2e2f08f6232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663beb2463b47f159021d6e7e704077c1373c9b7cc3c2a304535f2e2f08f6232->enter($__internal_663beb2463b47f159021d6e7e704077c1373c9b7cc3c2a304535f2e2f08f6232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main.html.twig"));

        $__internal_9ce909dd249095bc8545a91079fd1020b3aade7e7595e207b20196b6c5b34818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce909dd249095bc8545a91079fd1020b3aade7e7595e207b20196b6c5b34818->enter($__internal_9ce909dd249095bc8545a91079fd1020b3aade7e7595e207b20196b6c5b34818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main.html.twig"));

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
        
        $__internal_663beb2463b47f159021d6e7e704077c1373c9b7cc3c2a304535f2e2f08f6232->leave($__internal_663beb2463b47f159021d6e7e704077c1373c9b7cc3c2a304535f2e2f08f6232_prof);

        
        $__internal_9ce909dd249095bc8545a91079fd1020b3aade7e7595e207b20196b6c5b34818->leave($__internal_9ce909dd249095bc8545a91079fd1020b3aade7e7595e207b20196b6c5b34818_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ca116a2c16f734fb373afb2d5bc03f14ae74587a19d9a0fdf226e4ff2ef713c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ca116a2c16f734fb373afb2d5bc03f14ae74587a19d9a0fdf226e4ff2ef713c->enter($__internal_8ca116a2c16f734fb373afb2d5bc03f14ae74587a19d9a0fdf226e4ff2ef713c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9867459e766d50b7d294bea137666cb2001e16ef83690640e83cb70ae44f0b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9867459e766d50b7d294bea137666cb2001e16ef83690640e83cb70ae44f0b84->enter($__internal_9867459e766d50b7d294bea137666cb2001e16ef83690640e83cb70ae44f0b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9867459e766d50b7d294bea137666cb2001e16ef83690640e83cb70ae44f0b84->leave($__internal_9867459e766d50b7d294bea137666cb2001e16ef83690640e83cb70ae44f0b84_prof);

        
        $__internal_8ca116a2c16f734fb373afb2d5bc03f14ae74587a19d9a0fdf226e4ff2ef713c->leave($__internal_8ca116a2c16f734fb373afb2d5bc03f14ae74587a19d9a0fdf226e4ff2ef713c_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_9cdeeaae13f2dec7df89dfffe2577addf4d614b3c869300aca41d9fafa3229d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cdeeaae13f2dec7df89dfffe2577addf4d614b3c869300aca41d9fafa3229d4->enter($__internal_9cdeeaae13f2dec7df89dfffe2577addf4d614b3c869300aca41d9fafa3229d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_92e27722835e1fd78ff2b485e7a9c81a3d636c3ad76b2bdc4d80fd6a63f900f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e27722835e1fd78ff2b485e7a9c81a3d636c3ad76b2bdc4d80fd6a63f900f6->enter($__internal_92e27722835e1fd78ff2b485e7a9c81a3d636c3ad76b2bdc4d80fd6a63f900f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_92e27722835e1fd78ff2b485e7a9c81a3d636c3ad76b2bdc4d80fd6a63f900f6->leave($__internal_92e27722835e1fd78ff2b485e7a9c81a3d636c3ad76b2bdc4d80fd6a63f900f6_prof);

        
        $__internal_9cdeeaae13f2dec7df89dfffe2577addf4d614b3c869300aca41d9fafa3229d4->leave($__internal_9cdeeaae13f2dec7df89dfffe2577addf4d614b3c869300aca41d9fafa3229d4_prof);

    }

    // line 108
    public function block_SchuhleGroup($context, array $blocks = array())
    {
        $__internal_d67f522b52c9d164e6d29ffaab53c3839b0232889995fc83f3e79d914093679a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67f522b52c9d164e6d29ffaab53c3839b0232889995fc83f3e79d914093679a->enter($__internal_d67f522b52c9d164e6d29ffaab53c3839b0232889995fc83f3e79d914093679a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SchuhleGroup"));

        $__internal_33d82860489b4e5df932b988131e92c7412ac0db94f8c4c8749d500713eec1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d82860489b4e5df932b988131e92c7412ac0db94f8c4c8749d500713eec1da->enter($__internal_33d82860489b4e5df932b988131e92c7412ac0db94f8c4c8749d500713eec1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SchuhleGroup"));

        // line 109
        echo "
                                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:LayoutDataGetter:ErstellenGroupCalendarForm"));
        echo "

                                ";
        
        $__internal_33d82860489b4e5df932b988131e92c7412ac0db94f8c4c8749d500713eec1da->leave($__internal_33d82860489b4e5df932b988131e92c7412ac0db94f8c4c8749d500713eec1da_prof);

        
        $__internal_d67f522b52c9d164e6d29ffaab53c3839b0232889995fc83f3e79d914093679a->leave($__internal_d67f522b52c9d164e6d29ffaab53c3839b0232889995fc83f3e79d914093679a_prof);

    }

    // line 170
    public function block_dozent_reports($context, array $blocks = array())
    {
        $__internal_1247ecf31b9c48f3a30a6ea7faa66d7d4a1cde41f57773ab5eba92b08428d456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1247ecf31b9c48f3a30a6ea7faa66d7d4a1cde41f57773ab5eba92b08428d456->enter($__internal_1247ecf31b9c48f3a30a6ea7faa66d7d4a1cde41f57773ab5eba92b08428d456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dozent_reports"));

        $__internal_a391176e26421df4fe718d96245a97400d0d6f8de09df8f04283d8cc7a6d1a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a391176e26421df4fe718d96245a97400d0d6f8de09df8f04283d8cc7a6d1a50->enter($__internal_a391176e26421df4fe718d96245a97400d0d6f8de09df8f04283d8cc7a6d1a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dozent_reports"));

        // line 171
        echo "                                 ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Berichten:getfromToDateForm"));
        echo "
                                ";
        
        $__internal_a391176e26421df4fe718d96245a97400d0d6f8de09df8f04283d8cc7a6d1a50->leave($__internal_a391176e26421df4fe718d96245a97400d0d6f8de09df8f04283d8cc7a6d1a50_prof);

        
        $__internal_1247ecf31b9c48f3a30a6ea7faa66d7d4a1cde41f57773ab5eba92b08428d456->leave($__internal_1247ecf31b9c48f3a30a6ea7faa66d7d4a1cde41f57773ab5eba92b08428d456_prof);

    }

    // line 200
    public function block_group_reports($context, array $blocks = array())
    {
        $__internal_3d72b6434d530b5a0ef29704a349f48083eb5cf3a4e1b36899a52b17db1f3674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d72b6434d530b5a0ef29704a349f48083eb5cf3a4e1b36899a52b17db1f3674->enter($__internal_3d72b6434d530b5a0ef29704a349f48083eb5cf3a4e1b36899a52b17db1f3674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "group_reports"));

        $__internal_93c639b7ca3717bdad0965b2f32e58030c00c657ee12933fff3b8ead0f6c8253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c639b7ca3717bdad0965b2f32e58030c00c657ee12933fff3b8ead0f6c8253->enter($__internal_93c639b7ca3717bdad0965b2f32e58030c00c657ee12933fff3b8ead0f6c8253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "group_reports"));

        // line 201
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:LayoutDataGetter:GroupBerichtenFormRender"));
        echo "
                                ";
        
        $__internal_93c639b7ca3717bdad0965b2f32e58030c00c657ee12933fff3b8ead0f6c8253->leave($__internal_93c639b7ca3717bdad0965b2f32e58030c00c657ee12933fff3b8ead0f6c8253_prof);

        
        $__internal_3d72b6434d530b5a0ef29704a349f48083eb5cf3a4e1b36899a52b17db1f3674->leave($__internal_3d72b6434d530b5a0ef29704a349f48083eb5cf3a4e1b36899a52b17db1f3674_prof);

    }

    // line 271
    public function block_GroupNumber($context, array $blocks = array())
    {
        $__internal_8815c9385587882083516d4e27763261a3caf0484a2fe469d48930dd1a4c6bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8815c9385587882083516d4e27763261a3caf0484a2fe469d48930dd1a4c6bfc->enter($__internal_8815c9385587882083516d4e27763261a3caf0484a2fe469d48930dd1a4c6bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GroupNumber"));

        $__internal_22336eeff7734491eee419d336cc6c03faf1a3346fe72eb9daebdd5644146cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22336eeff7734491eee419d336cc6c03faf1a3346fe72eb9daebdd5644146cba->enter($__internal_22336eeff7734491eee419d336cc6c03faf1a3346fe72eb9daebdd5644146cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GroupNumber"));

        // line 272
        echo "                                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:LayoutDataGetter:getGroupCount"));
        echo "
                                        ";
        
        $__internal_22336eeff7734491eee419d336cc6c03faf1a3346fe72eb9daebdd5644146cba->leave($__internal_22336eeff7734491eee419d336cc6c03faf1a3346fe72eb9daebdd5644146cba_prof);

        
        $__internal_8815c9385587882083516d4e27763261a3caf0484a2fe469d48930dd1a4c6bfc->leave($__internal_8815c9385587882083516d4e27763261a3caf0484a2fe469d48930dd1a4c6bfc_prof);

    }

    // line 279
    public function block_DozentNumber($context, array $blocks = array())
    {
        $__internal_e6ccce4f1e0b56c0c792a98695c237e03f13d931b1ca0057ee7e0bc330ebb344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ccce4f1e0b56c0c792a98695c237e03f13d931b1ca0057ee7e0bc330ebb344->enter($__internal_e6ccce4f1e0b56c0c792a98695c237e03f13d931b1ca0057ee7e0bc330ebb344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "DozentNumber"));

        $__internal_51b4f370c8002642b47ffe9dd07d01124449a690506819acfd629fc1f2c5d42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b4f370c8002642b47ffe9dd07d01124449a690506819acfd629fc1f2c5d42b->enter($__internal_51b4f370c8002642b47ffe9dd07d01124449a690506819acfd629fc1f2c5d42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "DozentNumber"));

        // line 280
        echo "                                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:LayoutDataGetter:getDozentCount"));
        echo "
                                        ";
        
        $__internal_51b4f370c8002642b47ffe9dd07d01124449a690506819acfd629fc1f2c5d42b->leave($__internal_51b4f370c8002642b47ffe9dd07d01124449a690506819acfd629fc1f2c5d42b_prof);

        
        $__internal_e6ccce4f1e0b56c0c792a98695c237e03f13d931b1ca0057ee7e0bc330ebb344->leave($__internal_e6ccce4f1e0b56c0c792a98695c237e03f13d931b1ca0057ee7e0bc330ebb344_prof);

    }

    // line 298
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f569789f92c8af41a52ce84cfe869ebd4df050484b5535a8354b9796945074b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f569789f92c8af41a52ce84cfe869ebd4df050484b5535a8354b9796945074b->enter($__internal_8f569789f92c8af41a52ce84cfe869ebd4df050484b5535a8354b9796945074b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed09ff78a6dd7f1630d4b62b9f1d3008b0f4b7548e665801a8c510191acb6921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed09ff78a6dd7f1630d4b62b9f1d3008b0f4b7548e665801a8c510191acb6921->enter($__internal_ed09ff78a6dd7f1630d4b62b9f1d3008b0f4b7548e665801a8c510191acb6921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ed09ff78a6dd7f1630d4b62b9f1d3008b0f4b7548e665801a8c510191acb6921->leave($__internal_ed09ff78a6dd7f1630d4b62b9f1d3008b0f4b7548e665801a8c510191acb6921_prof);

        
        $__internal_8f569789f92c8af41a52ce84cfe869ebd4df050484b5535a8354b9796945074b->leave($__internal_8f569789f92c8af41a52ce84cfe869ebd4df050484b5535a8354b9796945074b_prof);

    }

    // line 332
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d9c354e36d915e97d2a79ab40fbf9fd8f9bda2ebef670f1637c16b938691d6ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c354e36d915e97d2a79ab40fbf9fd8f9bda2ebef670f1637c16b938691d6ab->enter($__internal_d9c354e36d915e97d2a79ab40fbf9fd8f9bda2ebef670f1637c16b938691d6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_1574931b91ba6505c4e6b4b810979f381a56ecf714b8c9cc50eca1e05f926743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1574931b91ba6505c4e6b4b810979f381a56ecf714b8c9cc50eca1e05f926743->enter($__internal_1574931b91ba6505c4e6b4b810979f381a56ecf714b8c9cc50eca1e05f926743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_1574931b91ba6505c4e6b4b810979f381a56ecf714b8c9cc50eca1e05f926743->leave($__internal_1574931b91ba6505c4e6b4b810979f381a56ecf714b8c9cc50eca1e05f926743_prof);

        
        $__internal_d9c354e36d915e97d2a79ab40fbf9fd8f9bda2ebef670f1637c16b938691d6ab->leave($__internal_d9c354e36d915e97d2a79ab40fbf9fd8f9bda2ebef670f1637c16b938691d6ab_prof);

    }

    public function getTemplateName()
    {
        return "main.html.twig";
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
</html>", "main.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\main.html.twig");
    }
}
