<?php

/* mainpages/EinzehlFachView.html.twig */
class __TwigTemplate_9c2185c5aeb9ae34bd1528b45018e0049821cfa3d5cae9601c9ac7f34af7f8cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "mainpages/EinzehlFachView.html.twig", 1);
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
        $__internal_7e3e42092c3596f4b970ff4099c5700e421c2bdd8845485315cf877866b8ea2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3e42092c3596f4b970ff4099c5700e421c2bdd8845485315cf877866b8ea2a->enter($__internal_7e3e42092c3596f4b970ff4099c5700e421c2bdd8845485315cf877866b8ea2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/EinzehlFachView.html.twig"));

        $__internal_afcf0946148437b22743819ba40dafa5c81b7b29d2fea2d844ef2eb538c599d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcf0946148437b22743819ba40dafa5c81b7b29d2fea2d844ef2eb538c599d1->enter($__internal_afcf0946148437b22743819ba40dafa5c81b7b29d2fea2d844ef2eb538c599d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/EinzehlFachView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e3e42092c3596f4b970ff4099c5700e421c2bdd8845485315cf877866b8ea2a->leave($__internal_7e3e42092c3596f4b970ff4099c5700e421c2bdd8845485315cf877866b8ea2a_prof);

        
        $__internal_afcf0946148437b22743819ba40dafa5c81b7b29d2fea2d844ef2eb538c599d1->leave($__internal_afcf0946148437b22743819ba40dafa5c81b7b29d2fea2d844ef2eb538c599d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eaa9dd5525b61292fa4deeadd337139173326bdcc3dd455c20d6e83d9cc153e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa9dd5525b61292fa4deeadd337139173326bdcc3dd455c20d6e83d9cc153e2->enter($__internal_eaa9dd5525b61292fa4deeadd337139173326bdcc3dd455c20d6e83d9cc153e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_260ea0435e1289d38ee5f426f493258b207b43e60eaefb44a62b2aa0264d867d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260ea0435e1289d38ee5f426f493258b207b43e60eaefb44a62b2aa0264d867d->enter($__internal_260ea0435e1289d38ee5f426f493258b207b43e60eaefb44a62b2aa0264d867d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Einzehlfach";
        
        $__internal_260ea0435e1289d38ee5f426f493258b207b43e60eaefb44a62b2aa0264d867d->leave($__internal_260ea0435e1289d38ee5f426f493258b207b43e60eaefb44a62b2aa0264d867d_prof);

        
        $__internal_eaa9dd5525b61292fa4deeadd337139173326bdcc3dd455c20d6e83d9cc153e2->leave($__internal_eaa9dd5525b61292fa4deeadd337139173326bdcc3dd455c20d6e83d9cc153e2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b640728579b96f157cdba5112601d8141284b839965affd4778d2343e360c428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b640728579b96f157cdba5112601d8141284b839965affd4778d2343e360c428->enter($__internal_b640728579b96f157cdba5112601d8141284b839965affd4778d2343e360c428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb792d4960ee10546313460bd9ca3f0a33cd6894d72cd6c326cb66c795d7df6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb792d4960ee10546313460bd9ca3f0a33cd6894d72cd6c326cb66c795d7df6b->enter($__internal_bb792d4960ee10546313460bd9ca3f0a33cd6894d72cd6c326cb66c795d7df6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
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
                    <h3 class=\"panel-title\">Einzehl Fächer </h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["EinzehlFachForm"] ?? $this->getContext($context, "EinzehlFachForm")), 'form_start', array("attr" => array("id" => "einzehlfacher", "class" => "form-group-md")));
        echo "

                    <div class=\"form-group\">
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["EinzehlFachForm"] ?? $this->getContext($context, "EinzehlFachForm")), "GesamtFach", array()), 'row', array("id" => "gesamtfachName"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["EinzehlFachForm"] ?? $this->getContext($context, "EinzehlFachForm")), "EinzelFach_Name", array()), 'row', array("id" => "einzehlfachName"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["EinzehlFachForm"] ?? $this->getContext($context, "EinzehlFachForm")), 'form_end');
        echo "

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#einzehlfacher\").bootstrapValidator({

                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#einzehlfacher').serializeArray();


                            \$.ajax({
                                type: \"POST\",
                                url: \"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_row_einzehl");
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
                                    var table = \$('#sg-datatables-einzelfach_datatable').DataTable();
                                    table.order( [[ 0, 'desc' ]] ).draw();
                                    \$('#einzehlfacher').trigger(\"reset\");

                                },
                                error: function (response) {
                                    \$('#einzehlfacher').trigger(\"reset\");
                                    \$('#feedback').html('');
                                    \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                                }
                            });


                },
                fields: {

                    'GesamtFach': {

                        validators: {

                            notEmpty: {

                                message: 'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },
                    'EinzelFach_Name': {

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Einzehl Fächer Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    ";
        // line 140
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "



                </div>
            </div>

        </div>

    </div>



";
        
        $__internal_bb792d4960ee10546313460bd9ca3f0a33cd6894d72cd6c326cb66c795d7df6b->leave($__internal_bb792d4960ee10546313460bd9ca3f0a33cd6894d72cd6c326cb66c795d7df6b_prof);

        
        $__internal_b640728579b96f157cdba5112601d8141284b839965affd4778d2343e360c428->leave($__internal_b640728579b96f157cdba5112601d8141284b839965affd4778d2343e360c428_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/EinzehlFachView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 140,  147 => 72,  121 => 49,  112 => 43,  106 => 40,  100 => 37,  68 => 7,  59 => 6,  41 => 5,  11 => 1,);
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



{% block title %} Einzehlfach{% endblock %}
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
                    <h3 class=\"panel-title\">Einzehl Fächer </h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    {{ form_start(EinzehlFachForm,{'attr':{'id': 'einzehlfacher','class':'form-group-md'}}) }}

                    <div class=\"form-group\">
                        {{ form_row(EinzehlFachForm.GesamtFach,{'id': 'gesamtfachName'}) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_row(EinzehlFachForm.EinzelFach_Name,{'id': 'einzehlfachName'}) }}
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    {{ form_end(EinzehlFachForm) }}

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#einzehlfacher\").bootstrapValidator({

                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#einzehlfacher').serializeArray();


                            \$.ajax({
                                type: \"POST\",
                                url: \"{{ path('save_row_einzehl') }}\",
                                data: data,
                                dataType: \"json\",
                                beforeSend: function () {
                                    \$('#pleaseWaitDialog').modal('show');
                                },
                                complete: function () {
                                    \$('#pleaseWaitDialog').modal('hide');
                                },
                                success: function (response) {
                                    var table = \$('#sg-datatables-einzelfach_datatable').DataTable();
                                    table.order( [[ 0, 'desc' ]] ).draw();
                                    \$('#einzehlfacher').trigger(\"reset\");

                                },
                                error: function (response) {
                                    \$('#einzehlfacher').trigger(\"reset\");
                                    \$('#feedback').html('');
                                    \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                                }
                            });


                },
                fields: {

                    'GesamtFach': {

                        validators: {

                            notEmpty: {

                                message: 'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },
                    'EinzelFach_Name': {

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Einzehl Fächer Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    {{ sg_datatables_render(datatable) }}



                </div>
            </div>

        </div>

    </div>



{% endblock %}





", "mainpages/EinzehlFachView.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\mainpages\\EinzehlFachView.html.twig");
    }
}
