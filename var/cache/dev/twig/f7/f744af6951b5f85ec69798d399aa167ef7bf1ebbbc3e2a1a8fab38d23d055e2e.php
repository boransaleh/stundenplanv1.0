<?php

/* :mainpages:SearchReport.html.twig */
class __TwigTemplate_2c68af698c05eea372faef4ee1fdfd5c1e5df7bff956d3d610dd398f8724c472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", ":mainpages:SearchReport.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'title' => array($this, 'block_title'),
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
        $__internal_80a6a0c0fda35fab1b8ae83d51b51008f1ffbf58907a9397144defc0ecdb97c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a6a0c0fda35fab1b8ae83d51b51008f1ffbf58907a9397144defc0ecdb97c1->enter($__internal_80a6a0c0fda35fab1b8ae83d51b51008f1ffbf58907a9397144defc0ecdb97c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:SearchReport.html.twig"));

        $__internal_5b8b45e02ca881410ae3eb919019dc66ff9f55806a4797597d38e4510865d707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8b45e02ca881410ae3eb919019dc66ff9f55806a4797597d38e4510865d707->enter($__internal_5b8b45e02ca881410ae3eb919019dc66ff9f55806a4797597d38e4510865d707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:SearchReport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80a6a0c0fda35fab1b8ae83d51b51008f1ffbf58907a9397144defc0ecdb97c1->leave($__internal_80a6a0c0fda35fab1b8ae83d51b51008f1ffbf58907a9397144defc0ecdb97c1_prof);

        
        $__internal_5b8b45e02ca881410ae3eb919019dc66ff9f55806a4797597d38e4510865d707->leave($__internal_5b8b45e02ca881410ae3eb919019dc66ff9f55806a4797597d38e4510865d707_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_9a561d8bc6898b259231460112740d91b3492a5993633cbbda7d2ac6aaf0d025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a561d8bc6898b259231460112740d91b3492a5993633cbbda7d2ac6aaf0d025->enter($__internal_9a561d8bc6898b259231460112740d91b3492a5993633cbbda7d2ac6aaf0d025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_5c0951d3064fed03e4972ffcf472c0e047ca0a218b569fab1fda4fa9884b6faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0951d3064fed03e4972ffcf472c0e047ca0a218b569fab1fda4fa9884b6faa->enter($__internal_5c0951d3064fed03e4972ffcf472c0e047ca0a218b569fab1fda4fa9884b6faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Admin</title>

    <!-- Bootstrap -->

    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"http://code.jquery.com/jquery-1.7.1.min.js\"></script>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrapValidator.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\">

    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->


";
        
        $__internal_5c0951d3064fed03e4972ffcf472c0e047ca0a218b569fab1fda4fa9884b6faa->leave($__internal_5c0951d3064fed03e4972ffcf472c0e047ca0a218b569fab1fda4fa9884b6faa_prof);

        
        $__internal_9a561d8bc6898b259231460112740d91b3492a5993633cbbda7d2ac6aaf0d025->leave($__internal_9a561d8bc6898b259231460112740d91b3492a5993633cbbda7d2ac6aaf0d025_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_4def434a03dfa651d599a862816fcbe439a0647a054f8f22578b970da8c05d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4def434a03dfa651d599a862816fcbe439a0647a054f8f22578b970da8c05d76->enter($__internal_4def434a03dfa651d599a862816fcbe439a0647a054f8f22578b970da8c05d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0a7e13481595da8ccef4dcd6e407e45f12f7b0c5e713b94d7a55c13b07393d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a7e13481595da8ccef4dcd6e407e45f12f7b0c5e713b94d7a55c13b07393d4->enter($__internal_b0a7e13481595da8ccef4dcd6e407e45f12f7b0c5e713b94d7a55c13b07393d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 32
        echo "    Dashboard
";
        
        $__internal_b0a7e13481595da8ccef4dcd6e407e45f12f7b0c5e713b94d7a55c13b07393d4->leave($__internal_b0a7e13481595da8ccef4dcd6e407e45f12f7b0c5e713b94d7a55c13b07393d4_prof);

        
        $__internal_4def434a03dfa651d599a862816fcbe439a0647a054f8f22578b970da8c05d76->leave($__internal_4def434a03dfa651d599a862816fcbe439a0647a054f8f22578b970da8c05d76_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_d94077369e023fc0397f60a427b735b3c3b715dc036e3eac54e00e65a3a10f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94077369e023fc0397f60a427b735b3c3b715dc036e3eac54e00e65a3a10f8f->enter($__internal_d94077369e023fc0397f60a427b735b3c3b715dc036e3eac54e00e65a3a10f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5cef88eeeab4041bb86b2fb4c073dfbe2bdd64106be21a6a98f33d12ec603b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5cef88eeeab4041bb86b2fb4c073dfbe2bdd64106be21a6a98f33d12ec603b2->enter($__internal_f5cef88eeeab4041bb86b2fb4c073dfbe2bdd64106be21a6a98f33d12ec603b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "

    <div class=\"row\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Kalendar Drucken</h3>
                </div>
                <div class=\"panel-body \">

                    <div class=\"form-wrapper\">
                        ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), 'form_start', array("attr" => array("id" => "searchreport"), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("draw-table"), "method" => "POST"));
        echo "
                            <div class=\"form-group\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), "SchuleGroup", array()), 'row');
        echo "
                            </div>
                        <div class=\"form-group\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), "Dozent", array()), 'row');
        echo "
                        </div>
                            <div class=\"form-group\">
                                <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                                    <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), "fromDate", array()), 'row');
        echo "
                                </div>
                            </div>


                        <div class=\"form-group\">
                            <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                                <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), "toDate", array()), 'row');
        echo "
                            </div>
                        </div>

                            <div class=\"clearfix\">
                                <button type=\"submit\" id=\"checkdate\" class=\"btn btn-erstellen pull-right\" > hinzufügen </button>
                            </div>
                        ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), 'form_end');
        echo "

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
        
        $__internal_f5cef88eeeab4041bb86b2fb4c073dfbe2bdd64106be21a6a98f33d12ec603b2->leave($__internal_f5cef88eeeab4041bb86b2fb4c073dfbe2bdd64106be21a6a98f33d12ec603b2_prof);

        
        $__internal_d94077369e023fc0397f60a427b735b3c3b715dc036e3eac54e00e65a3a10f8f->leave($__internal_d94077369e023fc0397f60a427b735b3c3b715dc036e3eac54e00e65a3a10f8f_prof);

    }

    // line 105
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e73637f75ebce152bec92b7edc6819672763b6bbb26063e0a786e87fcace15f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73637f75ebce152bec92b7edc6819672763b6bbb26063e0a786e87fcace15f2->enter($__internal_e73637f75ebce152bec92b7edc6819672763b6bbb26063e0a786e87fcace15f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_1a7e198284ed7760b0da412bb99de9f8dce3e2f84b6be20ca45b2c6cb1f53814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7e198284ed7760b0da412bb99de9f8dce3e2f84b6be20ca45b2c6cb1f53814->enter($__internal_1a7e198284ed7760b0da412bb99de9f8dce3e2f84b6be20ca45b2c6cb1f53814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 106
        echo "
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrapValidator.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/default.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.de.min.js"), "html", null, true);
        echo "\"></script>


    <script>
        \$(document).ready(function () {
            \$('#searchreport').bootstrapValidator('resetForm', true);
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

            \$('#searchreport').bootstrapValidator({

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
                        \$('#checkdate').prop('disabled', false);
                        \$('#searchreport').bootstrapValidator();
                    });


            \$('.js-datepicker-from').datepicker()
                    .on('changeDate', function(e) {
                        from=e.date;
                        \$('#checkdate').prop('disabled', false);
                        \$('#searchreport').bootstrapValidator();
                    });

            \$('#checkdate').on('click',function(){

                var fromdate = new moment(from);
                if (!fromdate.isBefore(to) && !fromdate.isSame(to)){
                    \$('#errorModal').modal('show');
                    \$(\"#searchreport\").submit(function(e){
                        e.preventDefault();
                    });
                }

                else{

                    \$('#searchreport').unbind('submit');
                }
            });
        });

        \$(document).ready(function() {

            var toreport=null;
            var fromreport=null;

            \$('.js-datepicker-to').datepicker()
                    .on('changeDate', function(e) {
                        toreport=e.date;
                        \$('#suchenB').prop('disabled', false);
                        \$('#suchenReport').bootstrapValidator();
                    });


            \$('.js-datepicker-from').datepicker()
                    .on('changeDate', function(e) {
                        fromreport=e.date;
                        \$('#suchenB').prop('disabled', false);
                        \$('#suchenReport').bootstrapValidator();
                    });

            \$('#suchenB').on('click',function(){

                var fromdate = new moment(fromreport);
                if (!fromdate.isBefore(toreport) && !fromdate.isSame(toreport)){
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
        
        $__internal_1a7e198284ed7760b0da412bb99de9f8dce3e2f84b6be20ca45b2c6cb1f53814->leave($__internal_1a7e198284ed7760b0da412bb99de9f8dce3e2f84b6be20ca45b2c6cb1f53814_prof);

        
        $__internal_e73637f75ebce152bec92b7edc6819672763b6bbb26063e0a786e87fcace15f2->leave($__internal_e73637f75ebce152bec92b7edc6819672763b6bbb26063e0a786e87fcace15f2_prof);

    }

    public function getTemplateName()
    {
        return ":mainpages:SearchReport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 112,  253 => 111,  249 => 110,  245 => 109,  241 => 108,  237 => 107,  234 => 106,  225 => 105,  185 => 72,  175 => 65,  164 => 57,  156 => 52,  150 => 49,  145 => 47,  131 => 35,  122 => 34,  111 => 32,  102 => 31,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  61 => 12,  52 => 5,  43 => 4,  11 => 1,);
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


{% block header %}
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Admin</title>

    <!-- Bootstrap -->

    <script src=\"{{ asset(\"js/moment.min.js\") }}\"></script>
    <script src=\"http://code.jquery.com/jquery-1.7.1.min.js\"></script>
    <link href=\"{{asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('css/bootstrap-datepicker.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/bootstrapValidator.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/default.css') }}\">

    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->


{% endblock %}
{% block title %}
    Dashboard
{% endblock %}
{% block body %}


    <div class=\"row\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Kalendar Drucken</h3>
                </div>
                <div class=\"panel-body \">

                    <div class=\"form-wrapper\">
                        {{ form_start(SearchForm,{ 'attr' : {'id': 'searchreport'},'action': path('draw-table'), 'method': 'POST'}) }}
                            <div class=\"form-group\">
                                {{ form_row(SearchForm.SchuleGroup) }}
                            </div>
                        <div class=\"form-group\">
                            {{ form_row(SearchForm.Dozent) }}
                        </div>
                            <div class=\"form-group\">
                                <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                                    <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                                    {{ form_row(SearchForm.fromDate) }}
                                </div>
                            </div>


                        <div class=\"form-group\">
                            <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                                <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                                {{ form_row(SearchForm.toDate) }}
                            </div>
                        </div>

                            <div class=\"clearfix\">
                                <button type=\"submit\" id=\"checkdate\" class=\"btn btn-erstellen pull-right\" > hinzufügen </button>
                            </div>
                        {{ form_end(SearchForm) }}

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

    <script src=\"{{ asset(\"js/jquery-1.9.1.js\") }}\"></script>
    <script src=\"{{asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrapValidator.js') }}\"></script>
    <script src=\"{{asset('js/bootstrap-datepicker.min.js') }}\"></script>
    <script src=\"{{asset('js/default.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap-datepicker.de.min.js') }}\"></script>


    <script>
        \$(document).ready(function () {
            \$('#searchreport').bootstrapValidator('resetForm', true);
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

            \$('#searchreport').bootstrapValidator({

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
                        \$('#checkdate').prop('disabled', false);
                        \$('#searchreport').bootstrapValidator();
                    });


            \$('.js-datepicker-from').datepicker()
                    .on('changeDate', function(e) {
                        from=e.date;
                        \$('#checkdate').prop('disabled', false);
                        \$('#searchreport').bootstrapValidator();
                    });

            \$('#checkdate').on('click',function(){

                var fromdate = new moment(from);
                if (!fromdate.isBefore(to) && !fromdate.isSame(to)){
                    \$('#errorModal').modal('show');
                    \$(\"#searchreport\").submit(function(e){
                        e.preventDefault();
                    });
                }

                else{

                    \$('#searchreport').unbind('submit');
                }
            });
        });

        \$(document).ready(function() {

            var toreport=null;
            var fromreport=null;

            \$('.js-datepicker-to').datepicker()
                    .on('changeDate', function(e) {
                        toreport=e.date;
                        \$('#suchenB').prop('disabled', false);
                        \$('#suchenReport').bootstrapValidator();
                    });


            \$('.js-datepicker-from').datepicker()
                    .on('changeDate', function(e) {
                        fromreport=e.date;
                        \$('#suchenB').prop('disabled', false);
                        \$('#suchenReport').bootstrapValidator();
                    });

            \$('#suchenB').on('click',function(){

                var fromdate = new moment(fromreport);
                if (!fromdate.isBefore(toreport) && !fromdate.isSame(toreport)){
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

", ":mainpages:SearchReport.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/mainpages/SearchReport.html.twig");
    }
}
