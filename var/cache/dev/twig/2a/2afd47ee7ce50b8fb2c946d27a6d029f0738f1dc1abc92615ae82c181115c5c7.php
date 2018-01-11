<?php

/* :mainpages:dozentenView.html.twig */
class __TwigTemplate_9ac569f0b4c96a2c807fd978613b465e4da8537ff92498ac53dece582fd98431 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", ":mainpages:dozentenView.html.twig", 1);
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
        $__internal_f75b7325e201a4cf7a12855759958ac3898930a83957749ffff589517392d594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75b7325e201a4cf7a12855759958ac3898930a83957749ffff589517392d594->enter($__internal_f75b7325e201a4cf7a12855759958ac3898930a83957749ffff589517392d594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:dozentenView.html.twig"));

        $__internal_5cc49a636e61465011bdbfd4139b8e3ff261e3043be288aec552e24ddffd4f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc49a636e61465011bdbfd4139b8e3ff261e3043be288aec552e24ddffd4f68->enter($__internal_5cc49a636e61465011bdbfd4139b8e3ff261e3043be288aec552e24ddffd4f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:dozentenView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f75b7325e201a4cf7a12855759958ac3898930a83957749ffff589517392d594->leave($__internal_f75b7325e201a4cf7a12855759958ac3898930a83957749ffff589517392d594_prof);

        
        $__internal_5cc49a636e61465011bdbfd4139b8e3ff261e3043be288aec552e24ddffd4f68->leave($__internal_5cc49a636e61465011bdbfd4139b8e3ff261e3043be288aec552e24ddffd4f68_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1992f1fc16d74d7946f25ddfaa0324cea2880489e909188ada3447d7eb795216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1992f1fc16d74d7946f25ddfaa0324cea2880489e909188ada3447d7eb795216->enter($__internal_1992f1fc16d74d7946f25ddfaa0324cea2880489e909188ada3447d7eb795216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58786438a0524219f1280a0f2c477b2b4c1da944bdcf91d9295e6b13ae751cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58786438a0524219f1280a0f2c477b2b4c1da944bdcf91d9295e6b13ae751cd8->enter($__internal_58786438a0524219f1280a0f2c477b2b4c1da944bdcf91d9295e6b13ae751cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Dozenten";
        
        $__internal_58786438a0524219f1280a0f2c477b2b4c1da944bdcf91d9295e6b13ae751cd8->leave($__internal_58786438a0524219f1280a0f2c477b2b4c1da944bdcf91d9295e6b13ae751cd8_prof);

        
        $__internal_1992f1fc16d74d7946f25ddfaa0324cea2880489e909188ada3447d7eb795216->leave($__internal_1992f1fc16d74d7946f25ddfaa0324cea2880489e909188ada3447d7eb795216_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_439a3015fb34ea2363c15c9654060eaaa0c1ea63424e7d6314eb6ea085bf2eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439a3015fb34ea2363c15c9654060eaaa0c1ea63424e7d6314eb6ea085bf2eec->enter($__internal_439a3015fb34ea2363c15c9654060eaaa0c1ea63424e7d6314eb6ea085bf2eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_101c7e86646126099af8fd80db4e7d8cfec5327bc7c5cd0fe3dedfe83f8897e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101c7e86646126099af8fd80db4e7d8cfec5327bc7c5cd0fe3dedfe83f8897e5->enter($__internal_101c7e86646126099af8fd80db4e7d8cfec5327bc7c5cd0fe3dedfe83f8897e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_101c7e86646126099af8fd80db4e7d8cfec5327bc7c5cd0fe3dedfe83f8897e5->leave($__internal_101c7e86646126099af8fd80db4e7d8cfec5327bc7c5cd0fe3dedfe83f8897e5_prof);

        
        $__internal_439a3015fb34ea2363c15c9654060eaaa0c1ea63424e7d6314eb6ea085bf2eec->leave($__internal_439a3015fb34ea2363c15c9654060eaaa0c1ea63424e7d6314eb6ea085bf2eec_prof);

    }

    public function getTemplateName()
    {
        return ":mainpages:dozentenView.html.twig";
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




", ":mainpages:dozentenView.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/mainpages/dozentenView.html.twig");
    }
}
