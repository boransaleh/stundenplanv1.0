<?php

/* mainpages/StandOrtView.html.twig */
class __TwigTemplate_dac466b004ae0609f689906948f1e54de4d88df3bee88ee483f10ffad0512a6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "mainpages/StandOrtView.html.twig", 1);
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
        $__internal_a5afbcb2367d80678032ad76831612db303458a3e5374cbd6267af5076340cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5afbcb2367d80678032ad76831612db303458a3e5374cbd6267af5076340cae->enter($__internal_a5afbcb2367d80678032ad76831612db303458a3e5374cbd6267af5076340cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/StandOrtView.html.twig"));

        $__internal_bde6b2ca62c831c5a2a8bb229497ba02f1068172721159df68c217e6d610f3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde6b2ca62c831c5a2a8bb229497ba02f1068172721159df68c217e6d610f3c5->enter($__internal_bde6b2ca62c831c5a2a8bb229497ba02f1068172721159df68c217e6d610f3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/StandOrtView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5afbcb2367d80678032ad76831612db303458a3e5374cbd6267af5076340cae->leave($__internal_a5afbcb2367d80678032ad76831612db303458a3e5374cbd6267af5076340cae_prof);

        
        $__internal_bde6b2ca62c831c5a2a8bb229497ba02f1068172721159df68c217e6d610f3c5->leave($__internal_bde6b2ca62c831c5a2a8bb229497ba02f1068172721159df68c217e6d610f3c5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_008a4ce41c0fac3598e514f1cc808ba2a6a95767b13d80730a0dc3c23d7ced8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008a4ce41c0fac3598e514f1cc808ba2a6a95767b13d80730a0dc3c23d7ced8c->enter($__internal_008a4ce41c0fac3598e514f1cc808ba2a6a95767b13d80730a0dc3c23d7ced8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2ae300c9a201894f01233301a127cef5db8252739ba5e9f4ccf2fd14b5bee14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ae300c9a201894f01233301a127cef5db8252739ba5e9f4ccf2fd14b5bee14->enter($__internal_b2ae300c9a201894f01233301a127cef5db8252739ba5e9f4ccf2fd14b5bee14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Standort Verwaltung";
        
        $__internal_b2ae300c9a201894f01233301a127cef5db8252739ba5e9f4ccf2fd14b5bee14->leave($__internal_b2ae300c9a201894f01233301a127cef5db8252739ba5e9f4ccf2fd14b5bee14_prof);

        
        $__internal_008a4ce41c0fac3598e514f1cc808ba2a6a95767b13d80730a0dc3c23d7ced8c->leave($__internal_008a4ce41c0fac3598e514f1cc808ba2a6a95767b13d80730a0dc3c23d7ced8c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e28ae1f4b3674085aed0bc86bf439dacb6cabb3cad411918b23505127cedbeb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28ae1f4b3674085aed0bc86bf439dacb6cabb3cad411918b23505127cedbeb3->enter($__internal_e28ae1f4b3674085aed0bc86bf439dacb6cabb3cad411918b23505127cedbeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d290ff003baeb6ae2f68ea2b9ab6a4807751ccc47856bc86a8fd1b023c1701c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d290ff003baeb6ae2f68ea2b9ab6a4807751ccc47856bc86a8fd1b023c1701c1->enter($__internal_d290ff003baeb6ae2f68ea2b9ab6a4807751ccc47856bc86a8fd1b023c1701c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d290ff003baeb6ae2f68ea2b9ab6a4807751ccc47856bc86a8fd1b023c1701c1->leave($__internal_d290ff003baeb6ae2f68ea2b9ab6a4807751ccc47856bc86a8fd1b023c1701c1_prof);

        
        $__internal_e28ae1f4b3674085aed0bc86bf439dacb6cabb3cad411918b23505127cedbeb3->leave($__internal_e28ae1f4b3674085aed0bc86bf439dacb6cabb3cad411918b23505127cedbeb3_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/StandOrtView.html.twig";
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




", "mainpages/StandOrtView.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\mainpages\\StandOrtView.html.twig");
    }
}
