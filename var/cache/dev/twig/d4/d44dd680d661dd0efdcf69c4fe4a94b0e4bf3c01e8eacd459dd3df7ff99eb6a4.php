<?php

/* :mainpages:StandOrtView.html.twig */
class __TwigTemplate_3dfefc14116b04c803f79b4d23ea7f68526fe6b9034da7f3ae67a7fb048144a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", ":mainpages:StandOrtView.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f105e29ec1147c11aa7d62be6cece11fe2d04a6519f4a0ab14e0ac65f0adcd77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f105e29ec1147c11aa7d62be6cece11fe2d04a6519f4a0ab14e0ac65f0adcd77->enter($__internal_f105e29ec1147c11aa7d62be6cece11fe2d04a6519f4a0ab14e0ac65f0adcd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:StandOrtView.html.twig"));

        $__internal_bb35ff4efbfa809ec750b72fe4650108d3ab08b2bc229eab7a0532ee714204ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb35ff4efbfa809ec750b72fe4650108d3ab08b2bc229eab7a0532ee714204ab->enter($__internal_bb35ff4efbfa809ec750b72fe4650108d3ab08b2bc229eab7a0532ee714204ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:StandOrtView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f105e29ec1147c11aa7d62be6cece11fe2d04a6519f4a0ab14e0ac65f0adcd77->leave($__internal_f105e29ec1147c11aa7d62be6cece11fe2d04a6519f4a0ab14e0ac65f0adcd77_prof);

        
        $__internal_bb35ff4efbfa809ec750b72fe4650108d3ab08b2bc229eab7a0532ee714204ab->leave($__internal_bb35ff4efbfa809ec750b72fe4650108d3ab08b2bc229eab7a0532ee714204ab_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e804f3ba85852640f4fdec6debec5ce9ceb80e11bafecc452694bb4e7a3ac9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e804f3ba85852640f4fdec6debec5ce9ceb80e11bafecc452694bb4e7a3ac9c->enter($__internal_2e804f3ba85852640f4fdec6debec5ce9ceb80e11bafecc452694bb4e7a3ac9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_368ac314a52b143c96a2d796916c56e11042e2784b364a21705abc1ea8b7ec3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368ac314a52b143c96a2d796916c56e11042e2784b364a21705abc1ea8b7ec3b->enter($__internal_368ac314a52b143c96a2d796916c56e11042e2784b364a21705abc1ea8b7ec3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Standort Verwaltung";
        
        $__internal_368ac314a52b143c96a2d796916c56e11042e2784b364a21705abc1ea8b7ec3b->leave($__internal_368ac314a52b143c96a2d796916c56e11042e2784b364a21705abc1ea8b7ec3b_prof);

        
        $__internal_2e804f3ba85852640f4fdec6debec5ce9ceb80e11bafecc452694bb4e7a3ac9c->leave($__internal_2e804f3ba85852640f4fdec6debec5ce9ceb80e11bafecc452694bb4e7a3ac9c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_81115ac42a4d184552156f1c30a781cb15e5d9e0505be7fe9f01a3d2c6d202d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81115ac42a4d184552156f1c30a781cb15e5d9e0505be7fe9f01a3d2c6d202d9->enter($__internal_81115ac42a4d184552156f1c30a781cb15e5d9e0505be7fe9f01a3d2c6d202d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74590831129907e669269c42260a211f46a2665f37f1aa42733119fc0fe20fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74590831129907e669269c42260a211f46a2665f37f1aa42733119fc0fe20fb2->enter($__internal_74590831129907e669269c42260a211f46a2665f37f1aa42733119fc0fe20fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


    <div class=\"row\" >
        <div class=\"col-lg-12\">

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

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">StandOrt </h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["standortForm"] ?? $this->getContext($context, "standortForm")), 'form_start', array("attr" => array("id" => "standortForm", "class" => "form-group-md")));
        echo "

                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["standortForm"] ?? $this->getContext($context, "standortForm")), "StandOrt_Name", array()), 'row', array("id" => "standortName"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" id=\"hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["standortForm"] ?? $this->getContext($context, "standortForm")), 'form_end');
        echo "

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#standortForm\").bootstrapValidator({
                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#standortForm').serializeArray();

                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_standort");
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
                            var table = \$('#sg-datatables-standort_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#standortForm').trigger(\"reset\");
                            \$('#feedback').html('');
                        },
                        error: function (response) {
                            \$('#standortForm').trigger(\"reset\");
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },
                fields: {

                    StandOrt_Name: {

                        validators: {

                            notEmpty: {
                                message: 'Bitte einen gültigen Wert eingeben'



                            }
                        }
                    }


                }

            });


        });


    </script>


    <div class=\"row\" style=\"margin-bottom: 30px;\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Standort Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    ";
        // line 126
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "



                </div>
            </div>

        </div>

    </div>



";
        
        $__internal_74590831129907e669269c42260a211f46a2665f37f1aa42733119fc0fe20fb2->leave($__internal_74590831129907e669269c42260a211f46a2665f37f1aa42733119fc0fe20fb2_prof);

        
        $__internal_81115ac42a4d184552156f1c30a781cb15e5d9e0505be7fe9f01a3d2c6d202d9->leave($__internal_81115ac42a4d184552156f1c30a781cb15e5d9e0505be7fe9f01a3d2c6d202d9_prof);

    }

    public function getTemplateName()
    {
        return ":mainpages:StandOrtView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 126,  139 => 66,  115 => 45,  106 => 39,  100 => 36,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
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


{% block title %} Standort Verwaltung{% endblock %}
{% block body %}



    <div class=\"row\" >
        <div class=\"col-lg-12\">

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

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">StandOrt </h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    {{ form_start(standortForm, {'attr':{'id': 'standortForm','class':'form-group-md'}}) }}

                    <div class=\"form-group\">
                        {{ form_row(standortForm.StandOrt_Name,{'id': 'standortName'}) }}
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" id=\"hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    {{ form_end(standortForm) }}

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#standortForm\").bootstrapValidator({
                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#standortForm').serializeArray();

                    \$.ajax({
                        type: \"POST\",
                        url: \"{{ path('save_standort') }}\",
                        data: data,
                        dataType: \"json\",
                        beforeSend: function () {
                            \$('#pleaseWaitDialog').modal('show');
                        },
                        complete: function () {
                            \$('#pleaseWaitDialog').modal('hide');
                        },
                        success: function (response) {
                            var table = \$('#sg-datatables-standort_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#standortForm').trigger(\"reset\");
                            \$('#feedback').html('');
                        },
                        error: function (response) {
                            \$('#standortForm').trigger(\"reset\");
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },
                fields: {

                    StandOrt_Name: {

                        validators: {

                            notEmpty: {
                                message: 'Bitte einen gültigen Wert eingeben'



                            }
                        }
                    }


                }

            });


        });


    </script>


    <div class=\"row\" style=\"margin-bottom: 30px;\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Standort Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    {{ sg_datatables_render(datatable) }}



                </div>
            </div>

        </div>

    </div>



{% endblock %}




", ":mainpages:StandOrtView.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/mainpages/StandOrtView.html.twig");
    }
}
