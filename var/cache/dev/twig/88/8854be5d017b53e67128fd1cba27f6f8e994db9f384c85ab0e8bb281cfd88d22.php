<?php

/* mainpages/UserManagement.html.twig */
class __TwigTemplate_01bbebcf3083e57b84009df417a27474561853b2e4c4947b3a18e57a6e12797a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "mainpages/UserManagement.html.twig", 1);
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
        $__internal_bd3eef1893285d5288ffa2c1128a8f0d4667a9e7fad30896a9075731bd19d3c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3eef1893285d5288ffa2c1128a8f0d4667a9e7fad30896a9075731bd19d3c0->enter($__internal_bd3eef1893285d5288ffa2c1128a8f0d4667a9e7fad30896a9075731bd19d3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/UserManagement.html.twig"));

        $__internal_464c8c280b7c65fea631a0c3815ec0222714fccca44bc6b290fe13d8e1d45811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464c8c280b7c65fea631a0c3815ec0222714fccca44bc6b290fe13d8e1d45811->enter($__internal_464c8c280b7c65fea631a0c3815ec0222714fccca44bc6b290fe13d8e1d45811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/UserManagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd3eef1893285d5288ffa2c1128a8f0d4667a9e7fad30896a9075731bd19d3c0->leave($__internal_bd3eef1893285d5288ffa2c1128a8f0d4667a9e7fad30896a9075731bd19d3c0_prof);

        
        $__internal_464c8c280b7c65fea631a0c3815ec0222714fccca44bc6b290fe13d8e1d45811->leave($__internal_464c8c280b7c65fea631a0c3815ec0222714fccca44bc6b290fe13d8e1d45811_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c95ab811709c7f8b87521d2bb927e6dd17bf1c5a01d42de9250edfaf87f6669f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95ab811709c7f8b87521d2bb927e6dd17bf1c5a01d42de9250edfaf87f6669f->enter($__internal_c95ab811709c7f8b87521d2bb927e6dd17bf1c5a01d42de9250edfaf87f6669f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b24c8bdf70c0e33682e234e16f26d5b1b296552e9bbd50b4f20d3c69b12d6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b24c8bdf70c0e33682e234e16f26d5b1b296552e9bbd50b4f20d3c69b12d6d8->enter($__internal_5b24c8bdf70c0e33682e234e16f26d5b1b296552e9bbd50b4f20d3c69b12d6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nutzer Verwaltung ";
        
        $__internal_5b24c8bdf70c0e33682e234e16f26d5b1b296552e9bbd50b4f20d3c69b12d6d8->leave($__internal_5b24c8bdf70c0e33682e234e16f26d5b1b296552e9bbd50b4f20d3c69b12d6d8_prof);

        
        $__internal_c95ab811709c7f8b87521d2bb927e6dd17bf1c5a01d42de9250edfaf87f6669f->leave($__internal_c95ab811709c7f8b87521d2bb927e6dd17bf1c5a01d42de9250edfaf87f6669f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a69222e3fe1105c6e9f076bb667363c7b7d6d5b390f5239318135f2b8add6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a69222e3fe1105c6e9f076bb667363c7b7d6d5b390f5239318135f2b8add6e1->enter($__internal_9a69222e3fe1105c6e9f076bb667363c7b7d6d5b390f5239318135f2b8add6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b53b3b9bc7025adab9c14e4061f40a12f3165093cfa5701e5eba767a6d457f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53b3b9bc7025adab9c14e4061f40a12f3165093cfa5701e5eba767a6d457f7f->enter($__internal_b53b3b9bc7025adab9c14e4061f40a12f3165093cfa5701e5eba767a6d457f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"panel-title\">Nutzer</h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["userForm"] ?? $this->getContext($context, "userForm")), 'form_start', array("attr" => array("id" => "userform", "class" => "form-group-md")));
        echo "

                    <div class=\"form-group\">
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "_username", array()), 'row', array("id" => "_username"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "_password", array()), 'row', array("id" => "_password"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "StandOrt", array()), 'row', array("id" => "StandOrt"));
        echo "

                    </div>

                    <div class=\"form-group\">
                        <div >
                            <div class=\"checkbox\">
                                <label>
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "roles", array()), 'row', array("id" => "roles"));
        echo " Administrator
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["userForm"] ?? $this->getContext($context, "userForm")), 'form_end');
        echo "

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#userform\").bootstrapValidator({

                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#userform').serializeArray();


                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_user");
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
                            var table = \$('#sg-datatables-user_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#userform').bootstrapValidator('resetForm', true);
                            \$('#feedback').html('');
                        },
                        error: function (response) {
                            \$('#userform').bootstrapValidator('resetForm', true);
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },fields: {

                    '_username':{

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            },
                            emailAddress:{

                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },

                    '_password': {

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            },
                            stringLength :{

                                min:6,
                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },

                    'StandOrt':{

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Nutzer Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    ";
        // line 173
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "



                </div>
            </div>

        </div>

    </div>



";
        
        $__internal_b53b3b9bc7025adab9c14e4061f40a12f3165093cfa5701e5eba767a6d457f7f->leave($__internal_b53b3b9bc7025adab9c14e4061f40a12f3165093cfa5701e5eba767a6d457f7f_prof);

        
        $__internal_9a69222e3fe1105c6e9f076bb667363c7b7d6d5b390f5239318135f2b8add6e1->leave($__internal_9a69222e3fe1105c6e9f076bb667363c7b7d6d5b390f5239318135f2b8add6e1_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/UserManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 173,  166 => 84,  140 => 61,  126 => 50,  115 => 42,  109 => 39,  103 => 36,  97 => 33,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'main.html.twig' %}{% block title %} Nutzer Verwaltung {% endblock %}{% block body %}    <div class=\"row\" >        <div class=\"col-lg-12\">            <div class=\"modal\" id=\"pleaseWaitDialog\" data-backdrop=\"static\" data-keyboard=\"false\">                <div class=\"modal-dialog\" role=\"document\">                    <div class=\"modal-content\">                        <div class=\"modal-header\">                            <h5 class=\"modal-title\">Processing...</h5>                        </div>                        <div class=\"modal-body\">                            <div class=\"progress\">                                <div class=\"progress-bar progress-bar-striped progress-bar-animated active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\"></div>                            </div>                        </div>                    </div>                </div>            </div>            <div class=\"panel panel-default \">                <div class=\"panel-heading\">                    <h3 class=\"panel-title\">Nutzer</h3>                </div>                <div class=\"panel-body \">                    <div id=\"feedback\"></div>                    {{ form_start(userForm,{'attr':{'id': 'userform','class':'form-group-md'}}) }}                    <div class=\"form-group\">                        {{ form_row(userForm._username,{'id': '_username'}) }}                    </div>                    <div class=\"form-group\">                        {{ form_row(userForm._password,{'id': '_password'}) }}                    </div>                    <div class=\"form-group\">                        {{ form_row(userForm.StandOrt,{'id': 'StandOrt'}) }}                    </div>                    <div class=\"form-group\">                        <div >                            <div class=\"checkbox\">                                <label>                                    {{ form_row(userForm.roles,{'id': 'roles'}) }} Administrator                                </label>                            </div>                        </div>                    </div>                    <div class=\"form-group\">                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">                    </div>                    {{ form_end(userForm) }}                </div>            </div>        </div>    </div>    <script type=\"text/javascript\">        \$(document).ready(function () {            \$(\"#userform\").bootstrapValidator({                submitHandler: function (validator, form, submitButton) {                    var data = \$('#userform').serializeArray();                    \$.ajax({                        type: \"POST\",                        url: \"{{ path('save_user') }}\",                        data: data,                        dataType: \"json\",                        beforeSend: function () {                            \$('#pleaseWaitDialog').modal('show');                        },                        complete: function () {                            \$('#pleaseWaitDialog').modal('hide');                        },                        success: function (response) {                            var table = \$('#sg-datatables-user_datatable').DataTable();                            table.order( [[ 0, 'desc' ]] ).draw();                            \$('#userform').bootstrapValidator('resetForm', true);                            \$('#feedback').html('');                        },                        error: function (response) {                            \$('#userform').bootstrapValidator('resetForm', true);                            \$('#feedback').html('');                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');                        }                    });                },fields: {                    '_username':{                        validators:{                            notEmpty:{                                message:'Bitte einen gültigen Wert eingeben'                            },                            emailAddress:{                                message:'Bitte einen gültigen Wert eingeben'                            }                        }                    },                    '_password': {                        validators:{                            notEmpty:{                                message:'Bitte einen gültigen Wert eingeben'                            },                            stringLength :{                                min:6,                                message:'Bitte einen gültigen Wert eingeben'                            }                        }                    },                    'StandOrt':{                        validators:{                            notEmpty:{                                message:'Bitte einen gültigen Wert eingeben'                            }                        }                    }                }            });        });    </script>    <div class=\"row\" style=\"margin-bottom: 30px;\">        <div class=\"col-lg-12\">            <div class=\"panel panel-default \">                <div class=\"panel-heading\">                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Nutzer Tabelle</span></h3>                </div>                <div class=\"panel-body \">                    {{ sg_datatables_render(datatable) }}                </div>            </div>        </div>    </div>{% endblock %}", "mainpages/UserManagement.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\mainpages\\UserManagement.html.twig");
    }
}
