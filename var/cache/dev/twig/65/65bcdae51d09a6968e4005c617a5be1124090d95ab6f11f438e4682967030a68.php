<?php

/* :mainpages:EinzehlFachView.html.twig */
class __TwigTemplate_a3d573982a9b220b11ba2666aa73638c592cf33f8eb2660e22f0dcbc36426cb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", ":mainpages:EinzehlFachView.html.twig", 1);
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
        $__internal_ecdafb6569ca0f89ec80e88a1bc7e7335ebce9b6e3830d93fa75264d63eb3c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecdafb6569ca0f89ec80e88a1bc7e7335ebce9b6e3830d93fa75264d63eb3c48->enter($__internal_ecdafb6569ca0f89ec80e88a1bc7e7335ebce9b6e3830d93fa75264d63eb3c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:EinzehlFachView.html.twig"));

        $__internal_638c89059d5bfead9eaf6aac5bb219e2ab0464f713e86a58a0b9f3b86f30764a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638c89059d5bfead9eaf6aac5bb219e2ab0464f713e86a58a0b9f3b86f30764a->enter($__internal_638c89059d5bfead9eaf6aac5bb219e2ab0464f713e86a58a0b9f3b86f30764a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:EinzehlFachView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecdafb6569ca0f89ec80e88a1bc7e7335ebce9b6e3830d93fa75264d63eb3c48->leave($__internal_ecdafb6569ca0f89ec80e88a1bc7e7335ebce9b6e3830d93fa75264d63eb3c48_prof);

        
        $__internal_638c89059d5bfead9eaf6aac5bb219e2ab0464f713e86a58a0b9f3b86f30764a->leave($__internal_638c89059d5bfead9eaf6aac5bb219e2ab0464f713e86a58a0b9f3b86f30764a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5955bc9c61b208d296dc763ef577a0c3858665fa063d68d45316e16ef96699f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5955bc9c61b208d296dc763ef577a0c3858665fa063d68d45316e16ef96699f5->enter($__internal_5955bc9c61b208d296dc763ef577a0c3858665fa063d68d45316e16ef96699f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ef3b4b217a5965c1f7d49b1e52b4220acaec5e12629b0778aa939028b9c23f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef3b4b217a5965c1f7d49b1e52b4220acaec5e12629b0778aa939028b9c23f7->enter($__internal_4ef3b4b217a5965c1f7d49b1e52b4220acaec5e12629b0778aa939028b9c23f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Einzehlfach";
        
        $__internal_4ef3b4b217a5965c1f7d49b1e52b4220acaec5e12629b0778aa939028b9c23f7->leave($__internal_4ef3b4b217a5965c1f7d49b1e52b4220acaec5e12629b0778aa939028b9c23f7_prof);

        
        $__internal_5955bc9c61b208d296dc763ef577a0c3858665fa063d68d45316e16ef96699f5->leave($__internal_5955bc9c61b208d296dc763ef577a0c3858665fa063d68d45316e16ef96699f5_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d20b5baadf3538a6923e4c4eb507e100d475496ca2213fe74683f6114963f5ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20b5baadf3538a6923e4c4eb507e100d475496ca2213fe74683f6114963f5ac->enter($__internal_d20b5baadf3538a6923e4c4eb507e100d475496ca2213fe74683f6114963f5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e151de63816ed5088e86434b04724ad1336245624b4b483652f6f1d112f359fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e151de63816ed5088e86434b04724ad1336245624b4b483652f6f1d112f359fa->enter($__internal_e151de63816ed5088e86434b04724ad1336245624b4b483652f6f1d112f359fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e151de63816ed5088e86434b04724ad1336245624b4b483652f6f1d112f359fa->leave($__internal_e151de63816ed5088e86434b04724ad1336245624b4b483652f6f1d112f359fa_prof);

        
        $__internal_d20b5baadf3538a6923e4c4eb507e100d475496ca2213fe74683f6114963f5ac->leave($__internal_d20b5baadf3538a6923e4c4eb507e100d475496ca2213fe74683f6114963f5ac_prof);

    }

    public function getTemplateName()
    {
        return ":mainpages:EinzehlFachView.html.twig";
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





", ":mainpages:EinzehlFachView.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/mainpages/EinzehlFachView.html.twig");
    }
}
