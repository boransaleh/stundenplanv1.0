<?php

/* mainpages/StundenPlanController.html.twig */
class __TwigTemplate_7fb528c8c1567ff00f54f8dd9ba45adf7fdddac76a6f03ba91e62399394e86ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "mainpages/StundenPlanController.html.twig", 1);
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
        $__internal_497abbfd68f524229c04d4e883f6ebe30ebe997dd220fdf9f8e8c28895f418c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497abbfd68f524229c04d4e883f6ebe30ebe997dd220fdf9f8e8c28895f418c4->enter($__internal_497abbfd68f524229c04d4e883f6ebe30ebe997dd220fdf9f8e8c28895f418c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/StundenPlanController.html.twig"));

        $__internal_1f77ced158e9b621c57e75339dfa4a1425f6e04bb06725db44e936ed7b0ca598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f77ced158e9b621c57e75339dfa4a1425f6e04bb06725db44e936ed7b0ca598->enter($__internal_1f77ced158e9b621c57e75339dfa4a1425f6e04bb06725db44e936ed7b0ca598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/StundenPlanController.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_497abbfd68f524229c04d4e883f6ebe30ebe997dd220fdf9f8e8c28895f418c4->leave($__internal_497abbfd68f524229c04d4e883f6ebe30ebe997dd220fdf9f8e8c28895f418c4_prof);

        
        $__internal_1f77ced158e9b621c57e75339dfa4a1425f6e04bb06725db44e936ed7b0ca598->leave($__internal_1f77ced158e9b621c57e75339dfa4a1425f6e04bb06725db44e936ed7b0ca598_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1e25c8b037a23dce8813da2d6878d48c75aafbae580fe34ce6915ae1c530de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e25c8b037a23dce8813da2d6878d48c75aafbae580fe34ce6915ae1c530de5->enter($__internal_a1e25c8b037a23dce8813da2d6878d48c75aafbae580fe34ce6915ae1c530de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b7196dffed27958626ac88af7bcd762f24071cf17e051d40d53c5dd9911ecc75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7196dffed27958626ac88af7bcd762f24071cf17e051d40d53c5dd9911ecc75->enter($__internal_b7196dffed27958626ac88af7bcd762f24071cf17e051d40d53c5dd9911ecc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Erstellen StundenPlan";
        
        $__internal_b7196dffed27958626ac88af7bcd762f24071cf17e051d40d53c5dd9911ecc75->leave($__internal_b7196dffed27958626ac88af7bcd762f24071cf17e051d40d53c5dd9911ecc75_prof);

        
        $__internal_a1e25c8b037a23dce8813da2d6878d48c75aafbae580fe34ce6915ae1c530de5->leave($__internal_a1e25c8b037a23dce8813da2d6878d48c75aafbae580fe34ce6915ae1c530de5_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_da07444080a140359a2bfa6457047e1fd7c65f7d044beabc58f3bbe0cdefcc25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da07444080a140359a2bfa6457047e1fd7c65f7d044beabc58f3bbe0cdefcc25->enter($__internal_da07444080a140359a2bfa6457047e1fd7c65f7d044beabc58f3bbe0cdefcc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_4b445e8f02c861727584a0c79c64271aa206e5c548871329f981ea6898220d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b445e8f02c861727584a0c79c64271aa206e5c548871329f981ea6898220d58->enter($__internal_4b445e8f02c861727584a0c79c64271aa206e5c548871329f981ea6898220d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_4b445e8f02c861727584a0c79c64271aa206e5c548871329f981ea6898220d58->leave($__internal_4b445e8f02c861727584a0c79c64271aa206e5c548871329f981ea6898220d58_prof);

        
        $__internal_da07444080a140359a2bfa6457047e1fd7c65f7d044beabc58f3bbe0cdefcc25->leave($__internal_da07444080a140359a2bfa6457047e1fd7c65f7d044beabc58f3bbe0cdefcc25_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_860567ad8126b972d5eaabcefbafdc3c89b1bed615893e94b49806913c192bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860567ad8126b972d5eaabcefbafdc3c89b1bed615893e94b49806913c192bac->enter($__internal_860567ad8126b972d5eaabcefbafdc3c89b1bed615893e94b49806913c192bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b91fa4e0d8eb30fc81c3073d3d37c2254f078e6e614a976be845199eb1bde9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91fa4e0d8eb30fc81c3073d3d37c2254f078e6e614a976be845199eb1bde9ed->enter($__internal_b91fa4e0d8eb30fc81c3073d3d37c2254f078e6e614a976be845199eb1bde9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b91fa4e0d8eb30fc81c3073d3d37c2254f078e6e614a976be845199eb1bde9ed->leave($__internal_b91fa4e0d8eb30fc81c3073d3d37c2254f078e6e614a976be845199eb1bde9ed_prof);

        
        $__internal_860567ad8126b972d5eaabcefbafdc3c89b1bed615893e94b49806913c192bac->leave($__internal_860567ad8126b972d5eaabcefbafdc3c89b1bed615893e94b49806913c192bac_prof);

    }

    // line 126
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ab0a859d2a3149fbd0905ac41a780ff6e1708bbfa6bd06c92380ca2b38e9590c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab0a859d2a3149fbd0905ac41a780ff6e1708bbfa6bd06c92380ca2b38e9590c->enter($__internal_ab0a859d2a3149fbd0905ac41a780ff6e1708bbfa6bd06c92380ca2b38e9590c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_2bc359fd8fc26c0d8bed83f203f8b6bdd5c75d8420972fe22f1c11747670e183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc359fd8fc26c0d8bed83f203f8b6bdd5c75d8420972fe22f1c11747670e183->enter($__internal_2bc359fd8fc26c0d8bed83f203f8b6bdd5c75d8420972fe22f1c11747670e183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_2bc359fd8fc26c0d8bed83f203f8b6bdd5c75d8420972fe22f1c11747670e183->leave($__internal_2bc359fd8fc26c0d8bed83f203f8b6bdd5c75d8420972fe22f1c11747670e183_prof);

        
        $__internal_ab0a859d2a3149fbd0905ac41a780ff6e1708bbfa6bd06c92380ca2b38e9590c->leave($__internal_ab0a859d2a3149fbd0905ac41a780ff6e1708bbfa6bd06c92380ca2b38e9590c_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/StundenPlanController.html.twig";
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
", "mainpages/StundenPlanController.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\mainpages\\StundenPlanController.html.twig");
    }
}
