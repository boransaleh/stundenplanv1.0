<?php

/* mainpages/Faecher.html.twig */
class __TwigTemplate_b9930b077020b382ca9ff69f21a2da9da788d0d167c4969c86abddaf92322ce3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "mainpages/Faecher.html.twig", 1);
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
        $__internal_1a8bd411f14add3ff053bade0086b4f9080c0a3bb19c0cf4727d8a01f1762a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8bd411f14add3ff053bade0086b4f9080c0a3bb19c0cf4727d8a01f1762a03->enter($__internal_1a8bd411f14add3ff053bade0086b4f9080c0a3bb19c0cf4727d8a01f1762a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/Faecher.html.twig"));

        $__internal_3ccd4f4c43756d13246b352a43a9d499500a4592eab7fb5e6ee7db4be0bc356e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccd4f4c43756d13246b352a43a9d499500a4592eab7fb5e6ee7db4be0bc356e->enter($__internal_3ccd4f4c43756d13246b352a43a9d499500a4592eab7fb5e6ee7db4be0bc356e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/Faecher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a8bd411f14add3ff053bade0086b4f9080c0a3bb19c0cf4727d8a01f1762a03->leave($__internal_1a8bd411f14add3ff053bade0086b4f9080c0a3bb19c0cf4727d8a01f1762a03_prof);

        
        $__internal_3ccd4f4c43756d13246b352a43a9d499500a4592eab7fb5e6ee7db4be0bc356e->leave($__internal_3ccd4f4c43756d13246b352a43a9d499500a4592eab7fb5e6ee7db4be0bc356e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4441561b89f96ad7babf9247f8f5ce21de0ee72a07a69fa462c6c336e0394754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4441561b89f96ad7babf9247f8f5ce21de0ee72a07a69fa462c6c336e0394754->enter($__internal_4441561b89f96ad7babf9247f8f5ce21de0ee72a07a69fa462c6c336e0394754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_532111e06b14c369b2ecfe0dc89b4a2861d90aa1cdff4e52354f30eb7fc19165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532111e06b14c369b2ecfe0dc89b4a2861d90aa1cdff4e52354f30eb7fc19165->enter($__internal_532111e06b14c369b2ecfe0dc89b4a2861d90aa1cdff4e52354f30eb7fc19165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " GesamtFach";
        
        $__internal_532111e06b14c369b2ecfe0dc89b4a2861d90aa1cdff4e52354f30eb7fc19165->leave($__internal_532111e06b14c369b2ecfe0dc89b4a2861d90aa1cdff4e52354f30eb7fc19165_prof);

        
        $__internal_4441561b89f96ad7babf9247f8f5ce21de0ee72a07a69fa462c6c336e0394754->leave($__internal_4441561b89f96ad7babf9247f8f5ce21de0ee72a07a69fa462c6c336e0394754_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a7b64bb473cc9841ab281835ce4b51978f08309be06c8dfc48a6e9fff78963b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7b64bb473cc9841ab281835ce4b51978f08309be06c8dfc48a6e9fff78963b->enter($__internal_6a7b64bb473cc9841ab281835ce4b51978f08309be06c8dfc48a6e9fff78963b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b14bb87691c6310098a9ec7f9a1752a6ede113694ebd86c6b7b7a7b4d3822cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14bb87691c6310098a9ec7f9a1752a6ede113694ebd86c6b7b7a7b4d3822cd6->enter($__internal_b14bb87691c6310098a9ec7f9a1752a6ede113694ebd86c6b7b7a7b4d3822cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"panel-title\">GesamtFächer </h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["GesamtFachForm"] ?? $this->getContext($context, "GesamtFachForm")), 'form_start', array("attr" => array("id" => "gesamtfacher", "class" => "form-group-md")));
        echo "

                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["GesamtFachForm"] ?? $this->getContext($context, "GesamtFachForm")), "GesamtFach_Name", array()), 'row', array("id" => "gesamtfachName"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" id=\"hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["GesamtFachForm"] ?? $this->getContext($context, "GesamtFachForm")), 'form_end');
        echo "

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#gesamtfacher\").bootstrapValidator({
                feedbackIcons: {
                    invalid: 'glyphicon glyphicon-remove',

                },
                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#gesamtfacher').serializeArray();

                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_row");
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
                            var table = \$('#sg-datatables-gesamtfach_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#gesamtfacher').trigger(\"reset\");
                            \$('#feedback').html('');
                        },
                        error: function (response) {
                            \$('#gesamtfacher').trigger(\"reset\");
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },
                fields: {

                    GesamtFach_Name: {

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Gesamt Fächer Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    ";
        // line 130
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "



                </div>
            </div>

        </div>

    </div>



";
        
        $__internal_b14bb87691c6310098a9ec7f9a1752a6ede113694ebd86c6b7b7a7b4d3822cd6->leave($__internal_b14bb87691c6310098a9ec7f9a1752a6ede113694ebd86c6b7b7a7b4d3822cd6_prof);

        
        $__internal_6a7b64bb473cc9841ab281835ce4b51978f08309be06c8dfc48a6e9fff78963b->leave($__internal_6a7b64bb473cc9841ab281835ce4b51978f08309be06c8dfc48a6e9fff78963b_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/Faecher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 130,  143 => 70,  115 => 45,  106 => 39,  100 => 36,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
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


{% block title %} GesamtFach{% endblock %}
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
                    <h3 class=\"panel-title\">GesamtFächer </h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    {{ form_start(GesamtFachForm, {'attr':{'id': 'gesamtfacher','class':'form-group-md'}}) }}

                    <div class=\"form-group\">
                        {{ form_row(GesamtFachForm.GesamtFach_Name,{'id': 'gesamtfachName'}) }}
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" id=\"hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    {{ form_end(GesamtFachForm) }}

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#gesamtfacher\").bootstrapValidator({
                feedbackIcons: {
                    invalid: 'glyphicon glyphicon-remove',

                },
                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#gesamtfacher').serializeArray();

                    \$.ajax({
                        type: \"POST\",
                        url: \"{{ path('save_row') }}\",
                        data: data,
                        dataType: \"json\",
                        beforeSend: function () {
                            \$('#pleaseWaitDialog').modal('show');
                        },
                        complete: function () {
                            \$('#pleaseWaitDialog').modal('hide');
                        },
                        success: function (response) {
                            var table = \$('#sg-datatables-gesamtfach_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#gesamtfacher').trigger(\"reset\");
                            \$('#feedback').html('');
                        },
                        error: function (response) {
                            \$('#gesamtfacher').trigger(\"reset\");
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },
                fields: {

                    GesamtFach_Name: {

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Gesamt Fächer Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    {{ sg_datatables_render(datatable) }}



                </div>
            </div>

        </div>

    </div>



{% endblock %}




", "mainpages/Faecher.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\mainpages\\Faecher.html.twig");
    }
}
