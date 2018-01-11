<?php

/* mainpages/FeirtageView.html.twig */
class __TwigTemplate_625d5fb3c8d46e0e63cd1f3d2b262c68f2d44d103f9883798007a27bf84e364b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "mainpages/FeirtageView.html.twig", 1);
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
        $__internal_b8625f0e6273b18214b74ff28783f2eaf051a4046ad2fd2799bd2e23e6a58b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8625f0e6273b18214b74ff28783f2eaf051a4046ad2fd2799bd2e23e6a58b6e->enter($__internal_b8625f0e6273b18214b74ff28783f2eaf051a4046ad2fd2799bd2e23e6a58b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/FeirtageView.html.twig"));

        $__internal_d165f377ba1a579a3807ef909a28ff37c3783c4cfe7de51873f7a9357647a7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d165f377ba1a579a3807ef909a28ff37c3783c4cfe7de51873f7a9357647a7ba->enter($__internal_d165f377ba1a579a3807ef909a28ff37c3783c4cfe7de51873f7a9357647a7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/FeirtageView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8625f0e6273b18214b74ff28783f2eaf051a4046ad2fd2799bd2e23e6a58b6e->leave($__internal_b8625f0e6273b18214b74ff28783f2eaf051a4046ad2fd2799bd2e23e6a58b6e_prof);

        
        $__internal_d165f377ba1a579a3807ef909a28ff37c3783c4cfe7de51873f7a9357647a7ba->leave($__internal_d165f377ba1a579a3807ef909a28ff37c3783c4cfe7de51873f7a9357647a7ba_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5d41d203d5c99f71a57799945ea1d5d211400a2281b300f0a23c0f991d0f68e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d41d203d5c99f71a57799945ea1d5d211400a2281b300f0a23c0f991d0f68e->enter($__internal_c5d41d203d5c99f71a57799945ea1d5d211400a2281b300f0a23c0f991d0f68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e8ef412210caead858b06adace5f539362a1e3170edadcdf3628b082532a661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8ef412210caead858b06adace5f539362a1e3170edadcdf3628b082532a661->enter($__internal_0e8ef412210caead858b06adace5f539362a1e3170edadcdf3628b082532a661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Feiertage Verwaltung";
        
        $__internal_0e8ef412210caead858b06adace5f539362a1e3170edadcdf3628b082532a661->leave($__internal_0e8ef412210caead858b06adace5f539362a1e3170edadcdf3628b082532a661_prof);

        
        $__internal_c5d41d203d5c99f71a57799945ea1d5d211400a2281b300f0a23c0f991d0f68e->leave($__internal_c5d41d203d5c99f71a57799945ea1d5d211400a2281b300f0a23c0f991d0f68e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_38b6af905e691fdac6fffe9166b34435f24101a0a98840d6d530c33fcb057b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b6af905e691fdac6fffe9166b34435f24101a0a98840d6d530c33fcb057b37->enter($__internal_38b6af905e691fdac6fffe9166b34435f24101a0a98840d6d530c33fcb057b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1f087629ec766f7a01ec02cbd14b2e4a7efd46f34556f9f3a498db5082821ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f087629ec766f7a01ec02cbd14b2e4a7efd46f34556f9f3a498db5082821ff->enter($__internal_d1f087629ec766f7a01ec02cbd14b2e4a7efd46f34556f9f3a498db5082821ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d1f087629ec766f7a01ec02cbd14b2e4a7efd46f34556f9f3a498db5082821ff->leave($__internal_d1f087629ec766f7a01ec02cbd14b2e4a7efd46f34556f9f3a498db5082821ff_prof);

        
        $__internal_38b6af905e691fdac6fffe9166b34435f24101a0a98840d6d530c33fcb057b37->leave($__internal_38b6af905e691fdac6fffe9166b34435f24101a0a98840d6d530c33fcb057b37_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/FeirtageView.html.twig";
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




", "mainpages/FeirtageView.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\mainpages\\FeirtageView.html.twig");
    }
}
