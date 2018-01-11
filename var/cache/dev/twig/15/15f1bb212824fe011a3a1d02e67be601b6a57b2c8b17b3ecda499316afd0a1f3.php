<?php

/* :security:ResetPasswordForm.html.twig */
class __TwigTemplate_edba120ced2285d8998014dc93a487bddd1671c453d82cfff6d800c56831bc3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("loginLayout.html.twig", ":security:ResetPasswordForm.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "loginLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccce69193a28877ea2bdfd18519ed90cdf8a679e222d4eded40e5f5c55fe1300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccce69193a28877ea2bdfd18519ed90cdf8a679e222d4eded40e5f5c55fe1300->enter($__internal_ccce69193a28877ea2bdfd18519ed90cdf8a679e222d4eded40e5f5c55fe1300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:ResetPasswordForm.html.twig"));

        $__internal_c09c9a7497449ef03d9094352580fca4d169279fe68f461fdd0ca5dccb0293c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09c9a7497449ef03d9094352580fca4d169279fe68f461fdd0ca5dccb0293c4->enter($__internal_c09c9a7497449ef03d9094352580fca4d169279fe68f461fdd0ca5dccb0293c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:ResetPasswordForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccce69193a28877ea2bdfd18519ed90cdf8a679e222d4eded40e5f5c55fe1300->leave($__internal_ccce69193a28877ea2bdfd18519ed90cdf8a679e222d4eded40e5f5c55fe1300_prof);

        
        $__internal_c09c9a7497449ef03d9094352580fca4d169279fe68f461fdd0ca5dccb0293c4->leave($__internal_c09c9a7497449ef03d9094352580fca4d169279fe68f461fdd0ca5dccb0293c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bb83be45522ca30ef9aa956abe38fc6a34acc23fff0d8e4adc3ae55242ccd81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb83be45522ca30ef9aa956abe38fc6a34acc23fff0d8e4adc3ae55242ccd81->enter($__internal_9bb83be45522ca30ef9aa956abe38fc6a34acc23fff0d8e4adc3ae55242ccd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b20cce0e7ca59d47bb654705425621ecb2f3b1dd7c5f51ec1331bff78a8d4ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b20cce0e7ca59d47bb654705425621ecb2f3b1dd7c5f51ec1331bff78a8d4ab->enter($__internal_8b20cce0e7ca59d47bb654705425621ecb2f3b1dd7c5f51ec1331bff78a8d4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "



    <div class=\"row\"
         style=\"padding-top: 5%; background-color: #4f5d73;-moz-border-radius: 9px 9px 9px 9px;border-radius: 9px 9px 9px 9px;\">

        <div class=\"col-lg-3\"></div>

        <div class=\"col-lg-6\">

            <div class=\"jumbotron\">


                <div align=\"center\" style=\"padding-bottom: 2%\">
                    <h3 style=\"color: #4f5d73\">WIFA Stunden Plan System</h3></br>
                    <img src='";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/login.png"), "html", null, true);
        echo "' class=\"img-rounded\">

                </div>

                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "reset_password", "class" => "form-group-sm")));
        echo "

                <div class=\"form-group \">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_password", array()), "first", array()), 'row', array("id" => "password", "label" => "New Password", "attr" => array("class" => "form-control", "placeholder" => "New Password")));
        // line 31
        echo "

                </div>

                <div class=\"form-group \">
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_password", array()), "second", array()), 'row', array("id" => "cpassword", "label" => "Confirm Password", "attr" => array("id" => "cpassword", "class" => "form-control", "placeholder" => "Confirm Password")));
        // line 40
        echo "
                </div>



                <div class=\"form-group \">
                    <button type=\"submit\" class=\"btn btn-danger\" formnovalidate>Reset Password</button>
                </div>
                ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "successchangedpassword"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 51
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 52
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "

                <script type=\"text/javascript\">
                    \$(document).ready(function() {
                        \$('#reset_password').bootstrapValidator({
                            message: 'This value is not valid',
                            feedbackIcons: {

                                valid: 'glyphicon glyphicon-ok',
                                invalid: 'glyphicon glyphicon-remove',
                                validating: 'glyphicon glyphicon-refresh'


                            },

                            fields: {



                                \"_password[first]\":{

                                    validators:{

                                        notEmpty:{

                                            message:\"Password Is Required\"
                                        },
                                        identical: {
                                            field: \"_password[second]\",
                                            message: 'The password and its confirm are not the same'
                                        },
                                        stringLength :{

                                            min:6,
                                            message:'Your password is not valid '
                                        }

                                    }
                                },

                                \"_password[second]\":{

                                    validators:{

                                        notEmpty:{
                                            message:\"Please Confirm Your Password\"
                                        },
                                        identical:{

                                            field:\"_password[first]\",
                                            message:\"please enter the same password\"
                                        },
                                        stringLength :{

                                            min:6,
                                            message:'Your password is not valid '
                                        }
                                    }
                                }


                            }




                        });
                    });





                </script>




            </div>
        </div>
        <div class=\"col-lg-3\"></div>
    </div>


";
        
        $__internal_8b20cce0e7ca59d47bb654705425621ecb2f3b1dd7c5f51ec1331bff78a8d4ab->leave($__internal_8b20cce0e7ca59d47bb654705425621ecb2f3b1dd7c5f51ec1331bff78a8d4ab_prof);

        
        $__internal_9bb83be45522ca30ef9aa956abe38fc6a34acc23fff0d8e4adc3ae55242ccd81->leave($__internal_9bb83be45522ca30ef9aa956abe38fc6a34acc23fff0d8e4adc3ae55242ccd81_prof);

    }

    public function getTemplateName()
    {
        return ":security:ResetPasswordForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 55,  113 => 52,  110 => 51,  106 => 50,  101 => 48,  91 => 40,  89 => 36,  82 => 31,  80 => 27,  74 => 24,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'loginLayout.html.twig' %}

{% block body %}




    <div class=\"row\"
         style=\"padding-top: 5%; background-color: #4f5d73;-moz-border-radius: 9px 9px 9px 9px;border-radius: 9px 9px 9px 9px;\">

        <div class=\"col-lg-3\"></div>

        <div class=\"col-lg-6\">

            <div class=\"jumbotron\">


                <div align=\"center\" style=\"padding-bottom: 2%\">
                    <h3 style=\"color: #4f5d73\">WIFA Stunden Plan System</h3></br>
                    <img src='{{ asset('img/login.png') }}' class=\"img-rounded\">

                </div>

                {{ form_start(form,{'attr':{'id': 'reset_password','class':'form-group-sm'}}) }}

                <div class=\"form-group \">
                    {{ form_row(form._password.first,{
                        'id':'password',
                        'label': 'New Password',
                        'attr':{'class':'form-control','placeholder':'New Password'}
                    }) }}

                </div>

                <div class=\"form-group \">
                    {{ form_row(form._password.second,{
                        'id':'cpassword',
                        'label': 'Confirm Password',
                        'attr':{'id':'cpassword','class':'form-control','placeholder':'Confirm Password'}
                    }) }}
                </div>



                <div class=\"form-group \">
                    <button type=\"submit\" class=\"btn btn-danger\" formnovalidate>Reset Password</button>
                </div>
                {{ form_end(form) }}

                {% for msg in app.session.flashBag.get('successchangedpassword') %}
                    <div class=\"alert alert-success\">
                        {{ msg }}
                    </div>
                {% endfor %}


                <script type=\"text/javascript\">
                    \$(document).ready(function() {
                        \$('#reset_password').bootstrapValidator({
                            message: 'This value is not valid',
                            feedbackIcons: {

                                valid: 'glyphicon glyphicon-ok',
                                invalid: 'glyphicon glyphicon-remove',
                                validating: 'glyphicon glyphicon-refresh'


                            },

                            fields: {



                                \"_password[first]\":{

                                    validators:{

                                        notEmpty:{

                                            message:\"Password Is Required\"
                                        },
                                        identical: {
                                            field: \"_password[second]\",
                                            message: 'The password and its confirm are not the same'
                                        },
                                        stringLength :{

                                            min:6,
                                            message:'Your password is not valid '
                                        }

                                    }
                                },

                                \"_password[second]\":{

                                    validators:{

                                        notEmpty:{
                                            message:\"Please Confirm Your Password\"
                                        },
                                        identical:{

                                            field:\"_password[first]\",
                                            message:\"please enter the same password\"
                                        },
                                        stringLength :{

                                            min:6,
                                            message:'Your password is not valid '
                                        }
                                    }
                                }


                            }




                        });
                    });





                </script>




            </div>
        </div>
        <div class=\"col-lg-3\"></div>
    </div>


{% endblock %}", ":security:ResetPasswordForm.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/security/ResetPasswordForm.html.twig");
    }
}
