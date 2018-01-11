<?php

/* :mainpages:FeirtageView.html.twig */
class __TwigTemplate_0de3c263c0eb8d7044d457f3120cf4889af0e2f35c7fbf2127a0788c92fa67f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", ":mainpages:FeirtageView.html.twig", 1);
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
        $__internal_d62d5c9f356352edaf9114ddbd1d7cc192bef7f96345453e9d63d3b78aa0e326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62d5c9f356352edaf9114ddbd1d7cc192bef7f96345453e9d63d3b78aa0e326->enter($__internal_d62d5c9f356352edaf9114ddbd1d7cc192bef7f96345453e9d63d3b78aa0e326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:FeirtageView.html.twig"));

        $__internal_64f2c9dd7e72ae3177326b7b63a2f42fdfd872a63efbe4d4c6cdc142e9b1bfae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f2c9dd7e72ae3177326b7b63a2f42fdfd872a63efbe4d4c6cdc142e9b1bfae->enter($__internal_64f2c9dd7e72ae3177326b7b63a2f42fdfd872a63efbe4d4c6cdc142e9b1bfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:FeirtageView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d62d5c9f356352edaf9114ddbd1d7cc192bef7f96345453e9d63d3b78aa0e326->leave($__internal_d62d5c9f356352edaf9114ddbd1d7cc192bef7f96345453e9d63d3b78aa0e326_prof);

        
        $__internal_64f2c9dd7e72ae3177326b7b63a2f42fdfd872a63efbe4d4c6cdc142e9b1bfae->leave($__internal_64f2c9dd7e72ae3177326b7b63a2f42fdfd872a63efbe4d4c6cdc142e9b1bfae_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2baa2318e2a475d7cc64439535fb4aa300a97787e65dc6ed60973f21d32a9dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2baa2318e2a475d7cc64439535fb4aa300a97787e65dc6ed60973f21d32a9dd8->enter($__internal_2baa2318e2a475d7cc64439535fb4aa300a97787e65dc6ed60973f21d32a9dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_670d91a910a6cbbeec46f6894a6d42827cc99108089ab657e056b19b6384425f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670d91a910a6cbbeec46f6894a6d42827cc99108089ab657e056b19b6384425f->enter($__internal_670d91a910a6cbbeec46f6894a6d42827cc99108089ab657e056b19b6384425f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Feiertage Verwaltung";
        
        $__internal_670d91a910a6cbbeec46f6894a6d42827cc99108089ab657e056b19b6384425f->leave($__internal_670d91a910a6cbbeec46f6894a6d42827cc99108089ab657e056b19b6384425f_prof);

        
        $__internal_2baa2318e2a475d7cc64439535fb4aa300a97787e65dc6ed60973f21d32a9dd8->leave($__internal_2baa2318e2a475d7cc64439535fb4aa300a97787e65dc6ed60973f21d32a9dd8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0985af70e5735fa268e10f42a33a93a2e2a6c9945e4c4300a752ef1295ed548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0985af70e5735fa268e10f42a33a93a2e2a6c9945e4c4300a752ef1295ed548->enter($__internal_d0985af70e5735fa268e10f42a33a93a2e2a6c9945e4c4300a752ef1295ed548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9b42a671ba74fb928abc499d9aa40fe72ec4d651b2e1e353ca2b28a2ddd339c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b42a671ba74fb928abc499d9aa40fe72ec4d651b2e1e353ca2b28a2ddd339c->enter($__internal_d9b42a671ba74fb928abc499d9aa40fe72ec4d651b2e1e353ca2b28a2ddd339c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"panel-title\">Feiertage</h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["addFeirtagForm"] ?? $this->getContext($context, "addFeirtagForm")), 'form_start', array("attr" => array("id" => "feirtagForm", "class" => "form-group-md")));
        echo "

                    <div class=\"form-group\">
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["addFeirtagForm"] ?? $this->getContext($context, "addFeirtagForm")), "Freitag_Name", array()), 'row', array("id" => "Freitag_Name"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["addFeirtagForm"] ?? $this->getContext($context, "addFeirtagForm")), "Freitag_Datum", array()), 'row', array("id" => "Freitag_Datum"));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["addFeirtagForm"] ?? $this->getContext($context, "addFeirtagForm")), 'form_end');
        echo "

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {
            \$('.js-datepicker-Feiertagsdat').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});

            \$(\"#feirtagForm\").bootstrapValidator({

                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#feirtagForm').serializeArray();


                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_feirtag");
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
                            var table = \$('#sg-datatables-freitag_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#feirtagForm').bootstrapValidator('resetForm', true);
                        },
                        error: function (response) {
                            \$('#feirtagForm').bootstrapValidator('resetForm', true);
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },
                fields: {

                    'Freitag_Name': {

                        validators: {

                            notEmpty: {

                                message: 'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },
                    'Freitag_Datum': {

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Feiertage Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    ";
        // line 139
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "



                </div>
            </div>

        </div>

    </div>



";
        
        $__internal_d9b42a671ba74fb928abc499d9aa40fe72ec4d651b2e1e353ca2b28a2ddd339c->leave($__internal_d9b42a671ba74fb928abc499d9aa40fe72ec4d651b2e1e353ca2b28a2ddd339c_prof);

        
        $__internal_d0985af70e5735fa268e10f42a33a93a2e2a6c9945e4c4300a752ef1295ed548->leave($__internal_d0985af70e5735fa268e10f42a33a93a2e2a6c9945e4c4300a752ef1295ed548_prof);

    }

    public function getTemplateName()
    {
        return ":mainpages:FeirtageView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 139,  148 => 72,  121 => 48,  111 => 41,  103 => 36,  97 => 33,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
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


{% block title %} Feiertage Verwaltung{% endblock %}
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
                    <h3 class=\"panel-title\">Feiertage</h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    {{ form_start(addFeirtagForm,{'attr':{'id': 'feirtagForm','class':'form-group-md'}}) }}

                    <div class=\"form-group\">
                        {{ form_row(addFeirtagForm.Freitag_Name,{'id': 'Freitag_Name'}) }}
                    </div>
                    <div class=\"form-group\">
                        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                            {{ form_row(addFeirtagForm.Freitag_Datum,{'id': 'Freitag_Datum'}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    {{ form_end(addFeirtagForm) }}

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {
            \$('.js-datepicker-Feiertagsdat').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});

            \$(\"#feirtagForm\").bootstrapValidator({

                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#feirtagForm').serializeArray();


                    \$.ajax({
                        type: \"POST\",
                        url: \"{{ path('save_feirtag') }}\",
                        data: data,
                        dataType: \"json\",
                        beforeSend: function () {
                            \$('#pleaseWaitDialog').modal('show');
                        },
                        complete: function () {
                            \$('#pleaseWaitDialog').modal('hide');
                        },
                        success: function (response) {
                            var table = \$('#sg-datatables-freitag_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#feirtagForm').bootstrapValidator('resetForm', true);
                        },
                        error: function (response) {
                            \$('#feirtagForm').bootstrapValidator('resetForm', true);
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },
                fields: {

                    'Freitag_Name': {

                        validators: {

                            notEmpty: {

                                message: 'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },
                    'Freitag_Datum': {

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Feiertage Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    {{ sg_datatables_render(datatable) }}



                </div>
            </div>

        </div>

    </div>



{% endblock %}




", ":mainpages:FeirtageView.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/mainpages/FeirtageView.html.twig");
    }
}
