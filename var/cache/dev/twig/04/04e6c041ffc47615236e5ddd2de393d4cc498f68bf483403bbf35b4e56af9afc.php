<?php

/* SgDatatablesBundle:datatable:multiselect_actions.html.twig */
class __TwigTemplate_516f1be95810a5b3baf06d8b37b75b703d0f53407bbf678b33b69921cce6ca24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_171d4a68499df48a3c02a14a4008d75d93505dc447e877d918a15a42ef1b4e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171d4a68499df48a3c02a14a4008d75d93505dc447e877d918a15a42ef1b4e4d->enter($__internal_171d4a68499df48a3c02a14a4008d75d93505dc447e877d918a15a42ef1b4e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:multiselect_actions.html.twig"));

        $__internal_0281f10d6627f2a91c99300a5d2a2bfb50964904bd3372624a961c995aa610de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0281f10d6627f2a91c99300a5d2a2bfb50964904bd3372624a961c995aa610de->enter($__internal_0281f10d6627f2a91c99300a5d2a2bfb50964904bd3372624a961c995aa610de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:multiselect_actions.html.twig"));

        // line 9
        $context["macros"] = $this;
        // line 10
        echo "
";
        // line 22
        echo "
";
        // line 28
        echo "
";
        // line 38
        echo "
";
        // line 54
        echo "
";
        // line 60
        echo "
";
        // line 61
        ob_start();
        // line 62
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? $this->getContext($context, "actions")));
        foreach ($context['_seq'] as $context["actionKey"] => $context["action"]) {
            // line 63
            echo "        ";
            if (($this->getAttribute($context["action"], "callRenderIfClosure", array()) === true)) {
                // line 64
                echo "            ";
                if (($this->getAttribute($context["action"], "button", array()) === false)) {
                    // line 65
                    echo "                ";
                    echo $this->getAttribute($context["action"], "startHtml", array());
                    echo "
                <a ";
                    // line 66
                    echo $context["macros"]->gethref($context["action"], $this->getAttribute(($context["route_parameters"] ?? $this->getContext($context, "route_parameters")), $context["actionKey"], array(), "array"));
                    echo " ";
                    echo $context["macros"]->getattributes($context["action"]);
                    echo " ";
                    echo $context["macros"]->getconfirm_dialog($context["action"]);
                    echo ">
                    ";
                    // line 67
                    echo $context["macros"]->getlink_title($context["action"]);
                    echo "
                </a>
                ";
                    // line 69
                    echo $this->getAttribute($context["action"], "endHtml", array());
                    echo "
            ";
                } else {
                    // line 71
                    echo "                ";
                    echo $this->getAttribute($context["action"], "startHtml", array());
                    echo "
                <button type=\"button\" ";
                    // line 72
                    echo $context["macros"]->getvalue($this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), $context["actionKey"], array(), "array"));
                    echo " ";
                    echo $context["macros"]->getattributes($context["action"]);
                    echo " ";
                    echo $context["macros"]->getconfirm_dialog($context["action"]);
                    echo ">
                    ";
                    // line 73
                    echo $context["macros"]->getlink_title($context["action"]);
                    echo "
                </button>
                ";
                    // line 75
                    echo $this->getAttribute($context["action"], "endHtml", array());
                    echo "
            ";
                }
                // line 77
                echo "        ";
            }
            // line 78
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['actionKey'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["multiselect_actions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 80
        echo "
";
        // line 82
        if ((null === ($context["dom_id"] ?? $this->getContext($context, "dom_id")))) {
            // line 83
            echo "    \$(\"#sg-datatables-";
            echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
            echo "-multiselect-actions\").append(\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["multiselect_actions"] ?? $this->getContext($context, "multiselect_actions")), "js"), "html", null, true);
            echo "\");
";
        } else {
            // line 85
            echo "    \$(\"#";
            echo twig_escape_filter($this->env, ($context["dom_id"] ?? $this->getContext($context, "dom_id")), "html", null, true);
            echo "\").append(\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["multiselect_actions"] ?? $this->getContext($context, "multiselect_actions")), "js"), "html", null, true);
            echo "\");
";
        }
        // line 87
        echo "
";
        // line 89
        echo "function updateCheckAll() {
    var cbox_all = \$(\"#sg-datatables-";
        // line 90
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo " tbody input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-checkbox:checkbox\");
    var cbox_checked = \$(\"#sg-datatables-";
        // line 91
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo " tbody input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-checkbox:checkbox:checked\");
    var cbox_checkall = \$(\"#sg-datatables-";
        // line 92
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo " input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-checkall:checkbox\");

    if(cbox_checked.length === 0){
        cbox_checkall.prop('checked', false);
        cbox_checkall.prop('indeterminate', false);
    } else if (cbox_checked.length === cbox_all.length){
        cbox_checkall.prop('checked', true);
        cbox_checkall.prop('indeterminate', false);
    } else {
        cbox_checkall.prop('checked', false);
        cbox_checkall.prop('indeterminate', true);
    }
}

";
        // line 107
        echo "\$(\"#sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo " tbody\").on(\"click\", \"tr\", function () {
    ";
        // line 109
        echo "    if (\$(this).find(\"input\").length) {
        \$(this).toggleClass(\"selected\");
    }

    ";
        // line 114
        echo "    \$(this).find(\"input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-checkbox:checkbox\").each(function() {
        this.checked = !this.checked;
    });

    updateCheckAll();
});

";
        // line 122
        echo "\$(\"#sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo " tbody\").on(\"click\", \"input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-checkbox:checkbox\", function () {
    this.checked = !this.checked;
    updateCheckAll();
});

";
        // line 128
        echo "\$(\"#sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "\").on(\"click\", \"input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-checkall:checkbox\", function () {
    \$(\"input.sg-datatables-";
        // line 129
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-checkbox\").prop('checked', \$(this).prop(\"checked\"));
    var propCheck = \$(this).prop(\"checked\");
    \$(\"#sg-datatables-";
        // line 131
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo " tbody tr\").each(function(){
        if (\$(this).find(\"input\").length) {
            if (true == propCheck) {
                \$(this).addClass(\"selected\");
            } else {
                \$(this).removeClass(\"selected\");
            }
        }
    });
});

";
        // line 143
        echo "\$(\".sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-action\").on(\"click\", function(event) {
    event.preventDefault();

    if (oTable.rows(\".selected\").data().length > 0) {
        if (\$(this).data(\"message\")) {
            if (!confirm(\$(this).data(\"message\"))) {
                return;
            }
        }

        var items = \$.map(oTable.rows(\".selected\").data(), function (i) {
            return i
        });

        var pipeline = ";
        // line 157
        echo twig_escape_filter($this->env, ($context["pipeline"] ?? $this->getContext($context, "pipeline")), "html", null, true);
        echo ";

        ";
        // line 159
        $context["token"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("multiselect");
        // line 160
        echo "
        var url = \$(this).attr(\"href\");
        if (url != null) {
            \$.ajax({
                url: url,
                type: \"POST\",
                cache: false,
                data: {
                    'data': items,
                    'token': \"";
        // line 169
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\"
                },
                success: function(msg) {
                    if (pipeline > 0) {
                        oTable.clearPipeline().draw();
                    } else {
                        oTable.draw();
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    console.log(XMLHttpRequest + ' ' + textStatus + ' '  + errorThrown);
                }
            })
        }
    } else {
        alert(\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sg.datatables.selectError", array(), "messages"), "html", null, true);
        echo "\");
    }
});
";
        
        $__internal_171d4a68499df48a3c02a14a4008d75d93505dc447e877d918a15a42ef1b4e4d->leave($__internal_171d4a68499df48a3c02a14a4008d75d93505dc447e877d918a15a42ef1b4e4d_prof);

        
        $__internal_0281f10d6627f2a91c99300a5d2a2bfb50964904bd3372624a961c995aa610de->leave($__internal_0281f10d6627f2a91c99300a5d2a2bfb50964904bd3372624a961c995aa610de_prof);

    }

    // line 11
    public function getlink_title($__action__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "action" => $__action__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8367c45ab624b0703e102ec76f84ac046a965c9e9d42587c85457e3cb5a38e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_8367c45ab624b0703e102ec76f84ac046a965c9e9d42587c85457e3cb5a38e36->enter($__internal_8367c45ab624b0703e102ec76f84ac046a965c9e9d42587c85457e3cb5a38e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link_title"));

            $__internal_1318cb67320e92333ff2d9e49a92a7e78f4167a8aa6675c2795782bb5ffb4d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1318cb67320e92333ff2d9e49a92a7e78f4167a8aa6675c2795782bb5ffb4d0c->enter($__internal_1318cb67320e92333ff2d9e49a92a7e78f4167a8aa6675c2795782bb5ffb4d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link_title"));

            // line 12
            echo "    ";
            if ((($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()) === null) && ($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()) === null))) {
                // line 13
                echo "        ";
                if ( !($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "route", array()) === null)) {
                    // line 14
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "route", array()), "html", null, true);
                    echo "
        ";
                } else {
                    // line 16
                    echo "            null
        ";
                }
                // line 18
                echo "    ";
            } else {
                // line 19
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()), "html", null, true);
                echo "\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()), "html", null, true);
                echo "
    ";
            }
            
            $__internal_1318cb67320e92333ff2d9e49a92a7e78f4167a8aa6675c2795782bb5ffb4d0c->leave($__internal_1318cb67320e92333ff2d9e49a92a7e78f4167a8aa6675c2795782bb5ffb4d0c_prof);

            
            $__internal_8367c45ab624b0703e102ec76f84ac046a965c9e9d42587c85457e3cb5a38e36->leave($__internal_8367c45ab624b0703e102ec76f84ac046a965c9e9d42587c85457e3cb5a38e36_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function getattributes($__action__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "action" => $__action__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_23da19763fbeea7ac8126d6cee59bf60e90b6515c253a25df241368c594591b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_23da19763fbeea7ac8126d6cee59bf60e90b6515c253a25df241368c594591b5->enter($__internal_23da19763fbeea7ac8126d6cee59bf60e90b6515c253a25df241368c594591b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_5b6efbf4302a9edcb7640413a17c069ed77102e2a15cacd68094aab791a2b2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5b6efbf4302a9edcb7640413a17c069ed77102e2a15cacd68094aab791a2b2aa->enter($__internal_5b6efbf4302a9edcb7640413a17c069ed77102e2a15cacd68094aab791a2b2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 24
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "attributes", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 25
                echo "        ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_5b6efbf4302a9edcb7640413a17c069ed77102e2a15cacd68094aab791a2b2aa->leave($__internal_5b6efbf4302a9edcb7640413a17c069ed77102e2a15cacd68094aab791a2b2aa_prof);

            
            $__internal_23da19763fbeea7ac8126d6cee59bf60e90b6515c253a25df241368c594591b5->leave($__internal_23da19763fbeea7ac8126d6cee59bf60e90b6515c253a25df241368c594591b5_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getconfirm_dialog($__action__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "action" => $__action__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1b68a9066266ae860a784671d0b2288d32312a13f91287eb60284e87b1bbd88c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_1b68a9066266ae860a784671d0b2288d32312a13f91287eb60284e87b1bbd88c->enter($__internal_1b68a9066266ae860a784671d0b2288d32312a13f91287eb60284e87b1bbd88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "confirm_dialog"));

            $__internal_5405635921fdc2fe86a3eb3f91a04a72cfac25df154b099534bd07aeda74ab4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5405635921fdc2fe86a3eb3f91a04a72cfac25df154b099534bd07aeda74ab4d->enter($__internal_5405635921fdc2fe86a3eb3f91a04a72cfac25df154b099534bd07aeda74ab4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "confirm_dialog"));

            // line 30
            echo "    ";
            if (($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "confirm", array()) === true)) {
                // line 31
                echo "        ";
                if ( !($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "confirmMessage", array()) === null)) {
                    // line 32
                    echo "            data-message=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "confirmMessage", array()), "html", null, true);
                    echo "\"
        ";
                } else {
                    // line 34
                    echo "            data-message=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sg.datatables.confirmMessage", array(), "messages"), "html", null, true);
                    echo "\"
        ";
                }
                // line 36
                echo "    ";
            }
            
            $__internal_5405635921fdc2fe86a3eb3f91a04a72cfac25df154b099534bd07aeda74ab4d->leave($__internal_5405635921fdc2fe86a3eb3f91a04a72cfac25df154b099534bd07aeda74ab4d_prof);

            
            $__internal_1b68a9066266ae860a784671d0b2288d32312a13f91287eb60284e87b1bbd88c->leave($__internal_1b68a9066266ae860a784671d0b2288d32312a13f91287eb60284e87b1bbd88c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function gethref($__action__ = null, $__route_parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "action" => $__action__,
            "route_parameters" => $__route_parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c1f5a7af59eda6768c1a17f7e01507f5433567b7aeff879331776af7398cfa0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c1f5a7af59eda6768c1a17f7e01507f5433567b7aeff879331776af7398cfa0f->enter($__internal_c1f5a7af59eda6768c1a17f7e01507f5433567b7aeff879331776af7398cfa0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "href"));

            $__internal_0254c06801651956321d1ea00f63d6afb55c6698fe708d0ec42a6c36271cd108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0254c06801651956321d1ea00f63d6afb55c6698fe708d0ec42a6c36271cd108->enter($__internal_0254c06801651956321d1ea00f63d6afb55c6698fe708d0ec42a6c36271cd108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "href"));

            // line 40
            echo "    ";
            if ( !($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "routeParameters", array()) === null)) {
                // line 41
                echo "        ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "locale", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array())))) {
                    // line 42
                    echo "            ";
                    if (twig_in_filter("_locale", twig_get_array_keys_filter(($context["route_parameters"] ?? $this->getContext($context, "route_parameters"))))) {
                        // line 43
                        echo "                ";
                        $context["route_parameters"] = twig_array_merge(($context["route_parameters"] ?? $this->getContext($context, "route_parameters")), array("_locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array())));
                        // line 44
                        echo "            ";
                    }
                    // line 45
                    echo "        ";
                }
                // line 46
                echo "    ";
            }
            // line 47
            echo "
    ";
            // line 48
            if ( !($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "route", array()) === null)) {
                // line 49
                echo "        href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "route", array()), ($context["route_parameters"] ?? $this->getContext($context, "route_parameters"))), "html", null, true);
                echo "\"
    ";
            } else {
                // line 51
                echo "        href=\"javascript:void(0);\"
    ";
            }
            
            $__internal_0254c06801651956321d1ea00f63d6afb55c6698fe708d0ec42a6c36271cd108->leave($__internal_0254c06801651956321d1ea00f63d6afb55c6698fe708d0ec42a6c36271cd108_prof);

            
            $__internal_c1f5a7af59eda6768c1a17f7e01507f5433567b7aeff879331776af7398cfa0f->leave($__internal_c1f5a7af59eda6768c1a17f7e01507f5433567b7aeff879331776af7398cfa0f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getvalue($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_dac1a82fd0b415a537e1855a3fddaeb1c40b8b387b79918fb99acd10397fdcfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_dac1a82fd0b415a537e1855a3fddaeb1c40b8b387b79918fb99acd10397fdcfe->enter($__internal_dac1a82fd0b415a537e1855a3fddaeb1c40b8b387b79918fb99acd10397fdcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "value"));

            $__internal_9f79ffa3648f102c4925658b7d0a9b5ed26d3db55bcb0afdf8868daceaab83c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9f79ffa3648f102c4925658b7d0a9b5ed26d3db55bcb0afdf8868daceaab83c9->enter($__internal_9f79ffa3648f102c4925658b7d0a9b5ed26d3db55bcb0afdf8868daceaab83c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "value"));

            // line 56
            echo "    ";
            if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
                // line 57
                echo "        value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\"
    ";
            }
            
            $__internal_9f79ffa3648f102c4925658b7d0a9b5ed26d3db55bcb0afdf8868daceaab83c9->leave($__internal_9f79ffa3648f102c4925658b7d0a9b5ed26d3db55bcb0afdf8868daceaab83c9_prof);

            
            $__internal_dac1a82fd0b415a537e1855a3fddaeb1c40b8b387b79918fb99acd10397fdcfe->leave($__internal_dac1a82fd0b415a537e1855a3fddaeb1c40b8b387b79918fb99acd10397fdcfe_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:multiselect_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  569 => 57,  566 => 56,  548 => 55,  525 => 51,  519 => 49,  517 => 48,  514 => 47,  511 => 46,  508 => 45,  505 => 44,  502 => 43,  499 => 42,  496 => 41,  493 => 40,  474 => 39,  452 => 36,  446 => 34,  440 => 32,  437 => 31,  434 => 30,  416 => 29,  386 => 25,  381 => 24,  363 => 23,  336 => 19,  333 => 18,  329 => 16,  323 => 14,  320 => 13,  317 => 12,  299 => 11,  285 => 184,  267 => 169,  256 => 160,  254 => 159,  249 => 157,  231 => 143,  217 => 131,  212 => 129,  205 => 128,  194 => 122,  183 => 114,  177 => 109,  172 => 107,  153 => 92,  147 => 91,  141 => 90,  138 => 89,  135 => 87,  127 => 85,  119 => 83,  117 => 82,  114 => 80,  107 => 78,  104 => 77,  99 => 75,  94 => 73,  86 => 72,  81 => 71,  76 => 69,  71 => 67,  63 => 66,  58 => 65,  55 => 64,  52 => 63,  47 => 62,  45 => 61,  42 => 60,  39 => 54,  36 => 38,  33 => 28,  30 => 22,  27 => 10,  25 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
{% import _self as macros %}

{% macro link_title(action) %}
    {% if action.label is same as(null) and action.icon is same as(null) %}
        {% if action.route is not same as(null) %}
            {{ action.route }}
        {% else %}
            null
        {% endif %}
    {% else %}
        <span class=\"{{ action.icon }}\"></span> {{ action.label }}
    {% endif %}
{% endmacro %}

{% macro attributes(action) %}
    {% for key, value in action.attributes %}
        {{ key }}=\"{{ value }}\"
    {% endfor %}
{% endmacro %}

{% macro confirm_dialog(action) %}
    {% if action.confirm is same as(true) %}
        {% if action.confirmMessage is not same as(null) %}
            data-message=\"{{ action.confirmMessage }}\"
        {% else %}
            data-message=\"{{ 'sg.datatables.confirmMessage'|trans({}, 'messages') }}\"
        {% endif %}
    {% endif %}
{% endmacro %}

{% macro href(action, route_parameters) %}
    {% if action.routeParameters is not same as(null) %}
        {% if app.request.locale is defined and app.request.locale is not null %}
            {% if '_locale' in route_parameters|keys %}
                {% set route_parameters = route_parameters|merge({ '_locale': app.request.locale }) %}
            {% endif %}
        {% endif %}
    {% endif %}

    {% if action.route is not same as(null) %}
        href=\"{{ path(action.route, route_parameters) }}\"
    {% else %}
        href=\"javascript:void(0);\"
    {% endif %}
{% endmacro %}

{% macro value(value) %}
    {% if value is not null %}
        value=\"{{ value }}\"
    {% endif %}
{% endmacro %}

{% set multiselect_actions %}
    {% for actionKey, action in actions %}
        {% if action.callRenderIfClosure is same as(true) %}
            {% if action.button is same as(false) %}
                {{ action.startHtml|raw }}
                <a {{ macros.href(action, route_parameters[actionKey]) }} {{ macros.attributes(action) }} {{ macros.confirm_dialog(action) }}>
                    {{ macros.link_title(action) }}
                </a>
                {{ action.endHtml|raw }}
            {% else %}
                {{ action.startHtml|raw }}
                <button type=\"button\" {{ macros.value(values[actionKey]) }} {{ macros.attributes(action) }} {{ macros.confirm_dialog(action) }}>
                    {{ macros.link_title(action) }}
                </button>
                {{ action.endHtml|raw }}
            {% endif %}
        {% endif %}
    {% endfor %}
{% endset %}

{# add multiselect actions #}
{% if dom_id is null %}
    \$(\"#sg-datatables-{{ datatable_name }}-multiselect-actions\").append(\"{{ multiselect_actions|e('js') }}\");
{% else %}
    \$(\"#{{ dom_id }}\").append(\"{{ multiselect_actions|e('js') }}\");
{% endif %}

{# function to update the check-all-checkbox #}
function updateCheckAll() {
    var cbox_all = \$(\"#sg-datatables-{{ datatable_name }} tbody input.sg-datatables-{{ datatable_name }}-multiselect-checkbox:checkbox\");
    var cbox_checked = \$(\"#sg-datatables-{{ datatable_name }} tbody input.sg-datatables-{{ datatable_name }}-multiselect-checkbox:checkbox:checked\");
    var cbox_checkall = \$(\"#sg-datatables-{{ datatable_name }} input.sg-datatables-{{ datatable_name }}-multiselect-checkall:checkbox\");

    if(cbox_checked.length === 0){
        cbox_checkall.prop('checked', false);
        cbox_checkall.prop('indeterminate', false);
    } else if (cbox_checked.length === cbox_all.length){
        cbox_checkall.prop('checked', true);
        cbox_checkall.prop('indeterminate', false);
    } else {
        cbox_checkall.prop('checked', false);
        cbox_checkall.prop('indeterminate', true);
    }
}

{# handle row <tr> click #}
\$(\"#sg-datatables-{{ datatable_name }} tbody\").on(\"click\", \"tr\", function () {
    {# add 'selected' class #}
    if (\$(this).find(\"input\").length) {
        \$(this).toggleClass(\"selected\");
    }

    {# set !checked for the row checkbox #}
    \$(this).find(\"input.sg-datatables-{{ datatable_name }}-multiselect-checkbox:checkbox\").each(function() {
        this.checked = !this.checked;
    });

    updateCheckAll();
});

{# handle checkbox <input> click #}
\$(\"#sg-datatables-{{ datatable_name }} tbody\").on(\"click\", \"input.sg-datatables-{{ datatable_name }}-multiselect-checkbox:checkbox\", function () {
    this.checked = !this.checked;
    updateCheckAll();
});

{# select/unselect all checkboxes #}
\$(\"#sg-datatables-{{ datatable_name }}\").on(\"click\", \"input.sg-datatables-{{ datatable_name }}-multiselect-checkall:checkbox\", function () {
    \$(\"input.sg-datatables-{{ datatable_name }}-multiselect-checkbox\").prop('checked', \$(this).prop(\"checked\"));
    var propCheck = \$(this).prop(\"checked\");
    \$(\"#sg-datatables-{{ datatable_name }} tbody tr\").each(function(){
        if (\$(this).find(\"input\").length) {
            if (true == propCheck) {
                \$(this).addClass(\"selected\");
            } else {
                \$(this).removeClass(\"selected\");
            }
        }
    });
});

{# handle multiselect action click #}
\$(\".sg-datatables-{{ datatable_name }}-multiselect-action\").on(\"click\", function(event) {
    event.preventDefault();

    if (oTable.rows(\".selected\").data().length > 0) {
        if (\$(this).data(\"message\")) {
            if (!confirm(\$(this).data(\"message\"))) {
                return;
            }
        }

        var items = \$.map(oTable.rows(\".selected\").data(), function (i) {
            return i
        });

        var pipeline = {{ pipeline }};

        {% set token = csrf_token('multiselect') %}

        var url = \$(this).attr(\"href\");
        if (url != null) {
            \$.ajax({
                url: url,
                type: \"POST\",
                cache: false,
                data: {
                    'data': items,
                    'token': \"{{ token }}\"
                },
                success: function(msg) {
                    if (pipeline > 0) {
                        oTable.clearPipeline().draw();
                    } else {
                        oTable.draw();
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    console.log(XMLHttpRequest + ' ' + textStatus + ' '  + errorThrown);
                }
            })
        }
    } else {
        alert(\"{{ 'sg.datatables.selectError'|trans({}, 'messages') }}\");
    }
});
", "SgDatatablesBundle:datatable:multiselect_actions.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle/Resources/views/datatable/multiselect_actions.html.twig");
    }
}
