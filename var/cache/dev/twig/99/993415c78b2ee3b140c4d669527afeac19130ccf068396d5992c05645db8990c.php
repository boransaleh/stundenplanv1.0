<?php

/* mainpages/dozentenView.html.twig */
class __TwigTemplate_72b5d00611a0532570a5206accd97031bc87e6dd752e581683d0f2e6d0c5dfcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "mainpages/dozentenView.html.twig", 1);
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
        $__internal_fd8074f112a525f0d257d655b102cbd592c1c2fb03cca22830194941d5f007b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8074f112a525f0d257d655b102cbd592c1c2fb03cca22830194941d5f007b8->enter($__internal_fd8074f112a525f0d257d655b102cbd592c1c2fb03cca22830194941d5f007b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/dozentenView.html.twig"));

        $__internal_08908dd34be6bd386c81110b7454617736eca24b8431a3e1923df65d76a6933c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08908dd34be6bd386c81110b7454617736eca24b8431a3e1923df65d76a6933c->enter($__internal_08908dd34be6bd386c81110b7454617736eca24b8431a3e1923df65d76a6933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/dozentenView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd8074f112a525f0d257d655b102cbd592c1c2fb03cca22830194941d5f007b8->leave($__internal_fd8074f112a525f0d257d655b102cbd592c1c2fb03cca22830194941d5f007b8_prof);

        
        $__internal_08908dd34be6bd386c81110b7454617736eca24b8431a3e1923df65d76a6933c->leave($__internal_08908dd34be6bd386c81110b7454617736eca24b8431a3e1923df65d76a6933c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1d0d1e12bef42ea97a46d4e62a46be47877e99a07cb2ff9ca96c57975266145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d0d1e12bef42ea97a46d4e62a46be47877e99a07cb2ff9ca96c57975266145->enter($__internal_a1d0d1e12bef42ea97a46d4e62a46be47877e99a07cb2ff9ca96c57975266145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f77535dcf4c99c3beb175c262671b6334cb04649f1ab1390ca8c6c4a363aa21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77535dcf4c99c3beb175c262671b6334cb04649f1ab1390ca8c6c4a363aa21e->enter($__internal_f77535dcf4c99c3beb175c262671b6334cb04649f1ab1390ca8c6c4a363aa21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Dozenten";
        
        $__internal_f77535dcf4c99c3beb175c262671b6334cb04649f1ab1390ca8c6c4a363aa21e->leave($__internal_f77535dcf4c99c3beb175c262671b6334cb04649f1ab1390ca8c6c4a363aa21e_prof);

        
        $__internal_a1d0d1e12bef42ea97a46d4e62a46be47877e99a07cb2ff9ca96c57975266145->leave($__internal_a1d0d1e12bef42ea97a46d4e62a46be47877e99a07cb2ff9ca96c57975266145_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ad9832cdd60d5611cd4d7a2ce3bc1351de68d0e1cea3e2d0ec63533e59252e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad9832cdd60d5611cd4d7a2ce3bc1351de68d0e1cea3e2d0ec63533e59252e7->enter($__internal_1ad9832cdd60d5611cd4d7a2ce3bc1351de68d0e1cea3e2d0ec63533e59252e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69cb63f638e4b84f999e633158ae5e3fe673c91b9bdb26764284e1cd92822bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cb63f638e4b84f999e633158ae5e3fe673c91b9bdb26764284e1cd92822bb1->enter($__internal_69cb63f638e4b84f999e633158ae5e3fe673c91b9bdb26764284e1cd92822bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\" >
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
                    <h3 class=\"panel-title\">Dozenten</h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["dozentForm"] ?? $this->getContext($context, "dozentForm")), 'form_start', array("attr" => array("id" => "dozentform", "class" => "form-group-md")));
        echo "

                    <div class=\"form-group\">
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["dozentForm"] ?? $this->getContext($context, "dozentForm")), "Dozent_Name", array()), 'row', array("id" => "DozentName"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["dozentForm"] ?? $this->getContext($context, "dozentForm")), "Dozent_Email", array()), 'row', array("id" => "DozentEmail"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["dozentForm"] ?? $this->getContext($context, "dozentForm")), 'form_end');
        echo "

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#dozentform\").bootstrapValidator({

                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#dozentform').serializeArray();


                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_row_dozent");
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
                            var table = \$('#sg-datatables-dozent_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#dozentform').trigger(\"reset\");
                        },
                        error: function (response) {
                            \$('#dozentform').trigger(\"reset\");
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },
                fields: {

                    'Dozent_Name': {

                        validators: {

                            notEmpty: {

                                message: 'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },
                    'Dozent_Email': {

                        validators: {

                            notEmpty: {

                                message: 'Bitte einen gültigen Wert eingeben'
                            },
                            emailAddress:{

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Dozenten Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    ";
        // line 141
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "



                </div>
            </div>

        </div>

    </div>



";
        
        $__internal_69cb63f638e4b84f999e633158ae5e3fe673c91b9bdb26764284e1cd92822bb1->leave($__internal_69cb63f638e4b84f999e633158ae5e3fe673c91b9bdb26764284e1cd92822bb1_prof);

        
        $__internal_1ad9832cdd60d5611cd4d7a2ce3bc1351de68d0e1cea3e2d0ec63533e59252e7->leave($__internal_1ad9832cdd60d5611cd4d7a2ce3bc1351de68d0e1cea3e2d0ec63533e59252e7_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/dozentenView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 141,  144 => 68,  118 => 45,  109 => 39,  103 => 36,  97 => 33,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
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


{% block title %} Dozenten{% endblock %}
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
                    <h3 class=\"panel-title\">Dozenten</h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    {{ form_start(dozentForm,{'attr':{'id': 'dozentform','class':'form-group-md'}}) }}

                    <div class=\"form-group\">
                        {{ form_row(dozentForm.Dozent_Name,{'id': 'DozentName'}) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_row(dozentForm.Dozent_Email,{'id': 'DozentEmail'}) }}
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    {{ form_end(dozentForm) }}

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#dozentform\").bootstrapValidator({

                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#dozentform').serializeArray();


                    \$.ajax({
                        type: \"POST\",
                        url: \"{{ path('save_row_dozent') }}\",
                        data: data,
                        dataType: \"json\",
                        beforeSend: function () {
                            \$('#pleaseWaitDialog').modal('show');
                        },
                        complete: function () {
                            \$('#pleaseWaitDialog').modal('hide');
                        },
                        success: function (response) {
                            var table = \$('#sg-datatables-dozent_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#dozentform').trigger(\"reset\");
                        },
                        error: function (response) {
                            \$('#dozentform').trigger(\"reset\");
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },
                fields: {

                    'Dozent_Name': {

                        validators: {

                            notEmpty: {

                                message: 'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },
                    'Dozent_Email': {

                        validators: {

                            notEmpty: {

                                message: 'Bitte einen gültigen Wert eingeben'
                            },
                            emailAddress:{

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Dozenten Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    {{ sg_datatables_render(datatable) }}



                </div>
            </div>

        </div>

    </div>



{% endblock %}




", "mainpages/dozentenView.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\mainpages\\dozentenView.html.twig");
    }
}
