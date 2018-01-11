<?php

/* mainpages/SearchReport.html.twig */
class __TwigTemplate_00f94ec899b8cb86478933c6a524eb582885e7f83e39490f422024549802341c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "mainpages/SearchReport.html.twig", 1);
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
        $__internal_d83aa4037ed51e1906ab3bb0bf0a1ead12f1e2b6c3be03d0c89969eb87dc5a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83aa4037ed51e1906ab3bb0bf0a1ead12f1e2b6c3be03d0c89969eb87dc5a65->enter($__internal_d83aa4037ed51e1906ab3bb0bf0a1ead12f1e2b6c3be03d0c89969eb87dc5a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/SearchReport.html.twig"));

        $__internal_59ae5fbe926fef6b192e104b05d7d130aecce245f30cbe8d37ef06f370f80336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ae5fbe926fef6b192e104b05d7d130aecce245f30cbe8d37ef06f370f80336->enter($__internal_59ae5fbe926fef6b192e104b05d7d130aecce245f30cbe8d37ef06f370f80336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/SearchReport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d83aa4037ed51e1906ab3bb0bf0a1ead12f1e2b6c3be03d0c89969eb87dc5a65->leave($__internal_d83aa4037ed51e1906ab3bb0bf0a1ead12f1e2b6c3be03d0c89969eb87dc5a65_prof);

        
        $__internal_59ae5fbe926fef6b192e104b05d7d130aecce245f30cbe8d37ef06f370f80336->leave($__internal_59ae5fbe926fef6b192e104b05d7d130aecce245f30cbe8d37ef06f370f80336_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_4c94dca72504a98e8ddf262cd9c7b8503c2e79afe9d171f44dd554e8b4856a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c94dca72504a98e8ddf262cd9c7b8503c2e79afe9d171f44dd554e8b4856a95->enter($__internal_4c94dca72504a98e8ddf262cd9c7b8503c2e79afe9d171f44dd554e8b4856a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_332f6f7bd16da33ad40651acd1bf1b5688153c3c4660ff481529ade54f7392df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332f6f7bd16da33ad40651acd1bf1b5688153c3c4660ff481529ade54f7392df->enter($__internal_332f6f7bd16da33ad40651acd1bf1b5688153c3c4660ff481529ade54f7392df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_332f6f7bd16da33ad40651acd1bf1b5688153c3c4660ff481529ade54f7392df->leave($__internal_332f6f7bd16da33ad40651acd1bf1b5688153c3c4660ff481529ade54f7392df_prof);

        
        $__internal_4c94dca72504a98e8ddf262cd9c7b8503c2e79afe9d171f44dd554e8b4856a95->leave($__internal_4c94dca72504a98e8ddf262cd9c7b8503c2e79afe9d171f44dd554e8b4856a95_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3c8358155a574878d4fb16aed4f7f06caaa54992e009ba6c3fb88bb650aea07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c8358155a574878d4fb16aed4f7f06caaa54992e009ba6c3fb88bb650aea07->enter($__internal_a3c8358155a574878d4fb16aed4f7f06caaa54992e009ba6c3fb88bb650aea07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05d71af44f5f5c0dcdb58d037be8366928a23cb93771bcae97090bcebf4159e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d71af44f5f5c0dcdb58d037be8366928a23cb93771bcae97090bcebf4159e4->enter($__internal_05d71af44f5f5c0dcdb58d037be8366928a23cb93771bcae97090bcebf4159e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 32
        echo "    Dashboard
";
        
        $__internal_05d71af44f5f5c0dcdb58d037be8366928a23cb93771bcae97090bcebf4159e4->leave($__internal_05d71af44f5f5c0dcdb58d037be8366928a23cb93771bcae97090bcebf4159e4_prof);

        
        $__internal_a3c8358155a574878d4fb16aed4f7f06caaa54992e009ba6c3fb88bb650aea07->leave($__internal_a3c8358155a574878d4fb16aed4f7f06caaa54992e009ba6c3fb88bb650aea07_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_b98d6a6b2d00b3f1456a776eded8cb800a4828f51f8b3cdcbe8f35244841d042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98d6a6b2d00b3f1456a776eded8cb800a4828f51f8b3cdcbe8f35244841d042->enter($__internal_b98d6a6b2d00b3f1456a776eded8cb800a4828f51f8b3cdcbe8f35244841d042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65c4adcdffcd98d89de3931cc1955bd8487671e2b56a5aeccd25a6639a04c457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c4adcdffcd98d89de3931cc1955bd8487671e2b56a5aeccd25a6639a04c457->enter($__internal_65c4adcdffcd98d89de3931cc1955bd8487671e2b56a5aeccd25a6639a04c457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_65c4adcdffcd98d89de3931cc1955bd8487671e2b56a5aeccd25a6639a04c457->leave($__internal_65c4adcdffcd98d89de3931cc1955bd8487671e2b56a5aeccd25a6639a04c457_prof);

        
        $__internal_b98d6a6b2d00b3f1456a776eded8cb800a4828f51f8b3cdcbe8f35244841d042->leave($__internal_b98d6a6b2d00b3f1456a776eded8cb800a4828f51f8b3cdcbe8f35244841d042_prof);

    }

    // line 105
    public function block_footer($context, array $blocks = array())
    {
        $__internal_731a7c1c6265fee9229aaa1583171db4cd20b4eb99671b3f159989a7cdd7b391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_731a7c1c6265fee9229aaa1583171db4cd20b4eb99671b3f159989a7cdd7b391->enter($__internal_731a7c1c6265fee9229aaa1583171db4cd20b4eb99671b3f159989a7cdd7b391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6af7115ae7762aa3fb2f09fad7e940557fceecd7cdfc6e82d7683f681306df22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af7115ae7762aa3fb2f09fad7e940557fceecd7cdfc6e82d7683f681306df22->enter($__internal_6af7115ae7762aa3fb2f09fad7e940557fceecd7cdfc6e82d7683f681306df22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_6af7115ae7762aa3fb2f09fad7e940557fceecd7cdfc6e82d7683f681306df22->leave($__internal_6af7115ae7762aa3fb2f09fad7e940557fceecd7cdfc6e82d7683f681306df22_prof);

        
        $__internal_731a7c1c6265fee9229aaa1583171db4cd20b4eb99671b3f159989a7cdd7b391->leave($__internal_731a7c1c6265fee9229aaa1583171db4cd20b4eb99671b3f159989a7cdd7b391_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/SearchReport.html.twig";
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

", "mainpages/SearchReport.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\mainpages\\SearchReport.html.twig");
    }
}
