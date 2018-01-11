<?php

/* :mainpages:GroupManagementView.html.twig */
class __TwigTemplate_89c422ad1f67c1b656f4e9a7776c8bdd816737526192071ebcbcfb0431b5c5c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", ":mainpages:GroupManagementView.html.twig", 1);
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
        $__internal_f80f12341831e79d4cc058995179e0513c2ff6a27b487155438865699e6bbe92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80f12341831e79d4cc058995179e0513c2ff6a27b487155438865699e6bbe92->enter($__internal_f80f12341831e79d4cc058995179e0513c2ff6a27b487155438865699e6bbe92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:GroupManagementView.html.twig"));

        $__internal_3816c032949cfccfada9900a1b72effdc974ee4235a72ec7a61318c8dd346fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3816c032949cfccfada9900a1b72effdc974ee4235a72ec7a61318c8dd346fad->enter($__internal_3816c032949cfccfada9900a1b72effdc974ee4235a72ec7a61318c8dd346fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:GroupManagementView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f80f12341831e79d4cc058995179e0513c2ff6a27b487155438865699e6bbe92->leave($__internal_f80f12341831e79d4cc058995179e0513c2ff6a27b487155438865699e6bbe92_prof);

        
        $__internal_3816c032949cfccfada9900a1b72effdc974ee4235a72ec7a61318c8dd346fad->leave($__internal_3816c032949cfccfada9900a1b72effdc974ee4235a72ec7a61318c8dd346fad_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe6a15c673a64c968119e51b1a1ae0a6893f497a5615b615162ec92dd8f886f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6a15c673a64c968119e51b1a1ae0a6893f497a5615b615162ec92dd8f886f3->enter($__internal_fe6a15c673a64c968119e51b1a1ae0a6893f497a5615b615162ec92dd8f886f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be246b8daf69a63e0d5fd7c9c368566ba02c851263c4f277dad97f33433f410c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be246b8daf69a63e0d5fd7c9c368566ba02c851263c4f277dad97f33433f410c->enter($__internal_be246b8daf69a63e0d5fd7c9c368566ba02c851263c4f277dad97f33433f410c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Gruppe Verwaltung";
        
        $__internal_be246b8daf69a63e0d5fd7c9c368566ba02c851263c4f277dad97f33433f410c->leave($__internal_be246b8daf69a63e0d5fd7c9c368566ba02c851263c4f277dad97f33433f410c_prof);

        
        $__internal_fe6a15c673a64c968119e51b1a1ae0a6893f497a5615b615162ec92dd8f886f3->leave($__internal_fe6a15c673a64c968119e51b1a1ae0a6893f497a5615b615162ec92dd8f886f3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_501af5df6ca0d7baae11962afe9d6b98d553bdead5c7671022c4bbb768bb0045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501af5df6ca0d7baae11962afe9d6b98d553bdead5c7671022c4bbb768bb0045->enter($__internal_501af5df6ca0d7baae11962afe9d6b98d553bdead5c7671022c4bbb768bb0045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e908f9c87f89e07ec6ae470882bba15700a74fa56f6ca4cd837bd5eca655d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e908f9c87f89e07ec6ae470882bba15700a74fa56f6ca4cd837bd5eca655d37->enter($__internal_8e908f9c87f89e07ec6ae470882bba15700a74fa56f6ca4cd837bd5eca655d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"panel-title\">Gruppe</h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["GroupForm"] ?? $this->getContext($context, "GroupForm")), 'form_start', array("attr" => array("id" => "groupform", "class" => "form-group-md")));
        echo "

                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["GroupForm"] ?? $this->getContext($context, "GroupForm")), "Group_Name", array()), 'row', array("id" => "Group_Name"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["GroupForm"] ?? $this->getContext($context, "GroupForm")), "Eintritt_Date", array()), 'row', array("id" => "Eintritt_Date"));
        echo "
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["GroupForm"] ?? $this->getContext($context, "GroupForm")), "Austritt_Date", array()), 'row', array("id" => "Austritt_Date"));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Erstellen\" id=\"add_sgroup\"  class=\"btn btn-erstellen pull-right\">
                    </div>

                    ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["GroupForm"] ?? $this->getContext($context, "GroupForm")), 'form_end');
        echo "

                </div>
            </div>

        </div>

    </div>


    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.js-datepicker-aus').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});
            \$('.js-datepicker-ein').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});

        });

        \$(document).ready(function () {

            \$(\"#groupform\").bootstrapValidator({

                fields: {

                    'Group_Name':{

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },

                    'Eintritt_Date': {

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },

                    'Austritt_Date':{

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Gruppe Tabelle</span></h3>
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
        
        $__internal_8e908f9c87f89e07ec6ae470882bba15700a74fa56f6ca4cd837bd5eca655d37->leave($__internal_8e908f9c87f89e07ec6ae470882bba15700a74fa56f6ca4cd837bd5eca655d37_prof);

        
        $__internal_501af5df6ca0d7baae11962afe9d6b98d553bdead5c7671022c4bbb768bb0045->leave($__internal_501af5df6ca0d7baae11962afe9d6b98d553bdead5c7671022c4bbb768bb0045_prof);

    }

    public function getTemplateName()
    {
        return ":mainpages:GroupManagementView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 141,  136 => 60,  125 => 52,  114 => 44,  106 => 39,  100 => 36,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
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


{% block title %} Gruppe Verwaltung{% endblock %}
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
                    <h3 class=\"panel-title\">Gruppe</h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    {{ form_start(GroupForm,{'attr':{'id': 'groupform','class':'form-group-md'}}) }}

                    <div class=\"form-group\">
                        {{ form_row(GroupForm.Group_Name,{'id': 'Group_Name'}) }}
                    </div>
                    <div class=\"form-group\">
                        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                            {{ form_row(GroupForm.Eintritt_Date,{'id': 'Eintritt_Date'}) }}
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                            {{ form_row(GroupForm.Austritt_Date,{'id': 'Austritt_Date'}) }}
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Erstellen\" id=\"add_sgroup\"  class=\"btn btn-erstellen pull-right\">
                    </div>

                    {{ form_end(GroupForm) }}

                </div>
            </div>

        </div>

    </div>


    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.js-datepicker-aus').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});
            \$('.js-datepicker-ein').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});

        });

        \$(document).ready(function () {

            \$(\"#groupform\").bootstrapValidator({

                fields: {

                    'Group_Name':{

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },

                    'Eintritt_Date': {

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },

                    'Austritt_Date':{

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Gruppe Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    {{ sg_datatables_render(datatable) }}



                </div>
            </div>

        </div>

    </div>



{% endblock %}




", ":mainpages:GroupManagementView.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/mainpages/GroupManagementView.html.twig");
    }
}
