<?php

/* :mainpages:StundenPlanController.html.twig */
class __TwigTemplate_8e3e650925b7e4380592436f4e9c665219b4d8db0ca72ce23dd7ad8c47fdce02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", ":mainpages:StundenPlanController.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36a7baf2c43b6f5a44e5942dd81dfb03ea18449a8bbf91df1fc75f42f237021e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a7baf2c43b6f5a44e5942dd81dfb03ea18449a8bbf91df1fc75f42f237021e->enter($__internal_36a7baf2c43b6f5a44e5942dd81dfb03ea18449a8bbf91df1fc75f42f237021e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:StundenPlanController.html.twig"));

        $__internal_eee5429716378044d455e08d28c3fa341de23aa518315129d846ead6e00824e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee5429716378044d455e08d28c3fa341de23aa518315129d846ead6e00824e5->enter($__internal_eee5429716378044d455e08d28c3fa341de23aa518315129d846ead6e00824e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:StundenPlanController.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36a7baf2c43b6f5a44e5942dd81dfb03ea18449a8bbf91df1fc75f42f237021e->leave($__internal_36a7baf2c43b6f5a44e5942dd81dfb03ea18449a8bbf91df1fc75f42f237021e_prof);

        
        $__internal_eee5429716378044d455e08d28c3fa341de23aa518315129d846ead6e00824e5->leave($__internal_eee5429716378044d455e08d28c3fa341de23aa518315129d846ead6e00824e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_601f596f7912b85645a9a2f33af63782eb8703d8bc133b31927970a8efa4b009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601f596f7912b85645a9a2f33af63782eb8703d8bc133b31927970a8efa4b009->enter($__internal_601f596f7912b85645a9a2f33af63782eb8703d8bc133b31927970a8efa4b009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69c8840f07787fa13adacc4d4d6400ff6fee8abe7473349a7f417ec89d5c4b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c8840f07787fa13adacc4d4d6400ff6fee8abe7473349a7f417ec89d5c4b84->enter($__internal_69c8840f07787fa13adacc4d4d6400ff6fee8abe7473349a7f417ec89d5c4b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Erstellen StundenPlan";
        
        $__internal_69c8840f07787fa13adacc4d4d6400ff6fee8abe7473349a7f417ec89d5c4b84->leave($__internal_69c8840f07787fa13adacc4d4d6400ff6fee8abe7473349a7f417ec89d5c4b84_prof);

        
        $__internal_601f596f7912b85645a9a2f33af63782eb8703d8bc133b31927970a8efa4b009->leave($__internal_601f596f7912b85645a9a2f33af63782eb8703d8bc133b31927970a8efa4b009_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_33e690a08366fb0f1ef835faaac07f69bd4bd584f2e7efd0f35cf75449f05680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e690a08366fb0f1ef835faaac07f69bd4bd584f2e7efd0f35cf75449f05680->enter($__internal_33e690a08366fb0f1ef835faaac07f69bd4bd584f2e7efd0f35cf75449f05680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b040e6d9ad83f44f3091b893d02fc1f0be84f3ee9a088168d34b5ba9c5dfe524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b040e6d9ad83f44f3091b893d02fc1f0be84f3ee9a088168d34b5ba9c5dfe524->enter($__internal_b040e6d9ad83f44f3091b893d02fc1f0be84f3ee9a088168d34b5ba9c5dfe524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/css/fullcalendar.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/css/fullcalendar.print.css"), "html", null, true);
        echo "\" media=\"print\"/>
    <link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-dialog.min.css"), "html", null, true);
        echo "\"/>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrapValidator.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\"/>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">


";
        
        $__internal_b040e6d9ad83f44f3091b893d02fc1f0be84f3ee9a088168d34b5ba9c5dfe524->leave($__internal_b040e6d9ad83f44f3091b893d02fc1f0be84f3ee9a088168d34b5ba9c5dfe524_prof);

        
        $__internal_33e690a08366fb0f1ef835faaac07f69bd4bd584f2e7efd0f35cf75449f05680->leave($__internal_33e690a08366fb0f1ef835faaac07f69bd4bd584f2e7efd0f35cf75449f05680_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_b66d8262aefede48e1a2b789b857f612f07cdb8878aa0f1768efaebcaf87cccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b66d8262aefede48e1a2b789b857f612f07cdb8878aa0f1768efaebcaf87cccd->enter($__internal_b66d8262aefede48e1a2b789b857f612f07cdb8878aa0f1768efaebcaf87cccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e32149287320868d0c424c2a49a8d5e66760af42180dd77c0dbe323e54bd9908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32149287320868d0c424c2a49a8d5e66760af42180dd77c0dbe323e54bd9908->enter($__internal_e32149287320868d0c424c2a49a8d5e66760af42180dd77c0dbe323e54bd9908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "
<div id=\"content\">



    <input type=\"text\" id=\"Schule_Group_Id\" class=\"hidden\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "Group_Id"), "method"), "html", null, true);
        echo "\">


    <header>
        <h2 class=\"page-title\"> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> <span style=\"color: #3baae3;\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "Group_Name"), "method"), "html", null, true);
        echo "</span> </h2>

    </header>
    <div class=\"content-inner\">


        ";
        // line 37
        echo $this->env->getExtension('fadosProduccions\fullCalendarBundle\Twig\fullCalendarExtension')->fullCalendar();
        echo "

        <div class=\"modal\" id=\"pleaseWaitDialog\" data-backdrop=\"static\" data-keyboard=\"false\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Processing...</h5>
                    </div>
                    <div class=\"modal-body\">

                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\" style=\"background-color:#293846;color: white; \">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Erstellen</h5>
                    </div>
                    ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["addeventForm"] ?? $this->getContext($context, "addeventForm")), 'form_start', array("attr" => array("id" => "addevent")));
        echo "
                    <div class=\"modal-body\">

                        <div class=\"form-group\" style=\"display: none;\">
                            <input type=\"text\" id=\"start\" />
                            <input type=\"text\" id=\"end\" />

                        </div>

                        <div class=\"form-group\">
                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["addeventForm"] ?? $this->getContext($context, "addeventForm")), "EinzelFach", array()), 'row', array("id" => "einfach"));
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["addeventForm"] ?? $this->getContext($context, "addeventForm")), "Dozent", array()), 'row');
        echo "
                        </div>

                        <div class=\"form-group pull-right\">

                            <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button>
                            <input type=\"submit\" id=\"hinzufügen\" value=\"Unterricht\" class=\"btn btn-erstellen\">
                            <button type=\"button\" id=\"urlaub\" class=\"btn btn-success \" aria-label=\"Left Align\">Urlaub
                            </button>
                            <button type=\"button\" id=\"praktikum\" class=\"btn  btn-warning \" aria-label=\"Left Align\">
                                 Praktikum
                            </button>

                        </div>

                        ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["addeventForm"] ?? $this->getContext($context, "addeventForm")), 'form_end');
        echo "


                    </div>



                </div>
            </div>


        </div>

    </div>

</div>


    <div id=\"errorModal\" class=\"modal fade\" role=\"dialog\">
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
        
        $__internal_e32149287320868d0c424c2a49a8d5e66760af42180dd77c0dbe323e54bd9908->leave($__internal_e32149287320868d0c424c2a49a8d5e66760af42180dd77c0dbe323e54bd9908_prof);

        
        $__internal_b66d8262aefede48e1a2b789b857f612f07cdb8878aa0f1768efaebcaf87cccd->leave($__internal_b66d8262aefede48e1a2b789b857f612f07cdb8878aa0f1768efaebcaf87cccd_prof);

    }

    // line 126
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8bf2e224c8a8e2516b9515d10e8f844b448c4be243e9ec3be54a74dfafdf8870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf2e224c8a8e2516b9515d10e8f844b448c4be243e9ec3be54a74dfafdf8870->enter($__internal_8bf2e224c8a8e2516b9515d10e8f844b448c4be243e9ec3be54a74dfafdf8870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_8368d7a69cfe7e5705be880a782793b18d8216ab6e6c103ab772491c6708d4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8368d7a69cfe7e5705be880a782793b18d8216ab6e6c103ab772491c6708d4dc->enter($__internal_8368d7a69cfe7e5705be880a782793b18d8216ab6e6c103ab772491c6708d4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 127
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-dialog.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrapValidator.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/init.fullCalendar.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/lang-all.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/default.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.de.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">

        \$(document).ready(function () {
            \$('[data-toggle=\"popover\"]').popover();
            \$(document).ajaxStart(function () {
                \$('#pleaseWaitDialog').modal('show');
            }).ajaxStop(function () {
                \$('#pleaseWaitDialog').modal('hide');

            });

        });
        \$(document).ready(function () {
            \$('.js-datepicker-to').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});
            \$('.js-datepicker-from').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});
            \$('[data-toggle=\"popover\"]').popover();

        });
        \$(document).ready(function () {
            \$('#selectgroup').bootstrapValidator({
                container:'tooltip',
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


    </script>



";
        
        $__internal_8368d7a69cfe7e5705be880a782793b18d8216ab6e6c103ab772491c6708d4dc->leave($__internal_8368d7a69cfe7e5705be880a782793b18d8216ab6e6c103ab772491c6708d4dc_prof);

        
        $__internal_8bf2e224c8a8e2516b9515d10e8f844b448c4be243e9ec3be54a74dfafdf8870->leave($__internal_8bf2e224c8a8e2516b9515d10e8f844b448c4be243e9ec3be54a74dfafdf8870_prof);

    }

    public function getTemplateName()
    {
        return ":mainpages:StundenPlanController.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 139,  315 => 138,  311 => 137,  307 => 136,  303 => 135,  299 => 134,  295 => 133,  291 => 132,  287 => 131,  283 => 130,  279 => 129,  275 => 128,  270 => 127,  261 => 126,  213 => 88,  195 => 73,  189 => 70,  176 => 60,  150 => 37,  141 => 31,  134 => 27,  127 => 22,  118 => 21,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  78 => 9,  74 => 8,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'main.html.twig' %}

{% block title %} Erstellen StundenPlan{% endblock %}

{% block header %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js\"></script>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/fullcalendar/css/fullcalendar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/fullcalendar/css/fullcalendar.print.css') }}\" media=\"print\"/>
    <link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\"/>
    <link href=\"{{asset('css/bootstrap-datepicker.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-dialog.min.css') }}\"/>
    <link href=\"{{ asset('css/bootstrapValidator.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/default.css') }}\"/>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">


{% endblock %}
{% block body %}

<div id=\"content\">



    <input type=\"text\" id=\"Schule_Group_Id\" class=\"hidden\" value=\"{{ app.session.get('Group_Id') }}\">


    <header>
        <h2 class=\"page-title\"> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> <span style=\"color: #3baae3;\">{{ app.session.get('Group_Name') }}</span> </h2>

    </header>
    <div class=\"content-inner\">


        {{ fullCalendar() }}

        <div class=\"modal\" id=\"pleaseWaitDialog\" data-backdrop=\"static\" data-keyboard=\"false\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Processing...</h5>
                    </div>
                    <div class=\"modal-body\">

                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\" style=\"background-color:#293846;color: white; \">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Erstellen</h5>
                    </div>
                    {{ form_start(addeventForm, {'attr': {'id': 'addevent'}}) }}
                    <div class=\"modal-body\">

                        <div class=\"form-group\" style=\"display: none;\">
                            <input type=\"text\" id=\"start\" />
                            <input type=\"text\" id=\"end\" />

                        </div>

                        <div class=\"form-group\">
                            {{ form_row(addeventForm.EinzelFach,{'id' : 'einfach'}) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_row(addeventForm.Dozent) }}
                        </div>

                        <div class=\"form-group pull-right\">

                            <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button>
                            <input type=\"submit\" id=\"hinzufügen\" value=\"Unterricht\" class=\"btn btn-erstellen\">
                            <button type=\"button\" id=\"urlaub\" class=\"btn btn-success \" aria-label=\"Left Align\">Urlaub
                            </button>
                            <button type=\"button\" id=\"praktikum\" class=\"btn  btn-warning \" aria-label=\"Left Align\">
                                 Praktikum
                            </button>

                        </div>

                        {{ form_end(addeventForm) }}


                    </div>



                </div>
            </div>


        </div>

    </div>

</div>


    <div id=\"errorModal\" class=\"modal fade\" role=\"dialog\">
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

{% endblock %}
{% block footer %}
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery-1.9.1.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-dialog.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrapValidator.js') }}\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/moment.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/init.fullCalendar.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/lang-all.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/default.js') }}\"></script>
    <script src=\"{{asset('js/bootstrap-datepicker.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap-datepicker.de.min.js') }}\"></script>
    <script type=\"text/javascript\">

        \$(document).ready(function () {
            \$('[data-toggle=\"popover\"]').popover();
            \$(document).ajaxStart(function () {
                \$('#pleaseWaitDialog').modal('show');
            }).ajaxStop(function () {
                \$('#pleaseWaitDialog').modal('hide');

            });

        });
        \$(document).ready(function () {
            \$('.js-datepicker-to').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});
            \$('.js-datepicker-from').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});
            \$('[data-toggle=\"popover\"]').popover();

        });
        \$(document).ready(function () {
            \$('#selectgroup').bootstrapValidator({
                container:'tooltip',
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


    </script>



{% endblock %}
", ":mainpages:StundenPlanController.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/mainpages/StundenPlanController.html.twig");
    }
}
