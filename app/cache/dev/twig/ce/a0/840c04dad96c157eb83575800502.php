<?php

/* WebProfilerExtraBundle:Collector:twig.html.twig */
class __TwigTemplate_cea0840c04dad96c157eb83575800502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "displayInWdt")) {
            // line 5
            echo "        ";
            $context["icon"] = ('' === $tmp = "            <img height=\"28\" alt=\"Twig\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc2QTRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc2QjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVCRTZBQjUxNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjVCRTZBQjUyNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+YSuGKQAAAWJQTFRFOz09PD09PT4+hISDUlJSkpKT/v7+PkBAQUFBUVBQ8fDwPD4+hYSDv76+oKGhNjc34+Litra1W1pasbCweXl5vby8U1NTt7a2e3t709PTREVFg4KCtLS0OTs74ODgODo6goGBVVVV8PDwv7+/8fHxkZKSd3Z2b25ucHFxMzU1mZqaT09P9vb2hIWEnZyceXh3zs7OlZaXWVpa19fX09PUnqCg29rbp6enT1BPkJGRn6CggoGAwsHB+vr6vLy8wcHBj4+PTU1NoaKieXh4fX18hoSE1dXWTk5NUVFQTk9OUE9PT05O6enpl5iYVVZWe3p5zMzMz87OS0xLtbW1iomJ+/v73dzdMjQ0gX9/0dDQOjw8ODg4UE9Oj42NUlNT6urql5eY8fHwWFlYiIeGUlNShIODrq2tMTIys7KynJ2eS0pJf319srGx3t7ffHx71NTUenp62traT1BQPz8/P0BA////xP9xOwAAAHZ0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AAFiqUcAAADxSURBVHjaYijFAhgoFNRN8ixCARZGegwp5m6S+UhA0kRdgkE7EF2zlggDi2ipsAIzHCgIlyYABXlL/WWZ4EDWpZS1ACQYIc8IB/LWUMGQIA8vd29OMHCMLVUtYFDMKA1VUeLyiU/kAgElnVLLAgYx0VJjcRmbUltxQRCQiQSpZFEuVYvijmGT42AvAQKGPKiZ0gzcQmwCUEEesKAyFkGgmakYgn45pckYgorBpa6YZvKWZqdrZrHJRfODQLg+WNCuNCDTKq1UxYkPBEztSw1FGIoM0IPOt4AhTji3EBmYhTlLMGhIFaMBKQcGGsQ7QIABAMedrCZHnT6FAAAAAElFTkSuQmCC\"/>
            <span class=\"sf-toolbar-info-piece-additional-detail\">Twig</span>
        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Template";
            // line 11
            echo (((1 == twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates")))) ? (":") : ("s"));
            echo "</b>
                <span>
                    ";
            // line 13
            if ((1 == twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates")))) {
                // line 14
                echo "                        ";
                $context["template"] = twig_first($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates"));
                // line 15
                echo "                        ";
                if ($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "path")) {
                    // line 16
                    echo "                            <a class=\"sf-toolbar-info-method\" href=\"";
                    echo $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "path"), 1);
                    echo "\">
                                ";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "name"), "html", null, true);
                    echo "
                            </a>
                        ";
                } else {
                    // line 20
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "name"), "html", null, true);
                    echo "
                        ";
                }
                // line 22
                echo "                    ";
            } else {
                // line 23
                echo "                        ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates")), "html", null, true);
                echo "
                    ";
            }
            // line 25
            echo "                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Extensions</b>
                <span>";
            // line 29
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "extensions")), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>avail. Tests</b>
                <span>";
            // line 33
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tests")), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>avail. Filters</b>
                <span>";
            // line 37
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "filters")), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>avail. Functions</b>
                <span>";
            // line 41
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "functions")), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 44
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 45
            echo "    ";
        }
    }

    // line 48
    public function block_menu($context, array $blocks = array())
    {
        // line 49
        echo "    <span class=\"label\">
        <span class=\"icon\">
            <img width=30 src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofilerextra/images/twig.png"), "html", null, true);
        echo "\" />
        </span>
        <strong>Twig</strong>
        <span class=\"count\">
            <span>";
        // line 55
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "extensions")), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 60
    public function block_panel($context, array $blocks = array())
    {
        // line 61
        echo "    <h2>Twig Templates</h2>
    <table>
        <tr>
            <th>Template</th>
            <th>Parameters</th>
        </tr>
        ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates"));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 68
            echo "        <tr>
            <th>
                ";
            // line 70
            if ($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "path")) {
                // line 71
                echo "                    <a href=\"";
                echo $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "path"), 1);
                echo "\">
                        ";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "name"), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 75
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "name"), "html", null, true);
                echo "
                ";
            }
            // line 77
            echo "            </th>
            <td>
                ";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "parameters"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["parameter"] => $context["metadata"]) {
                // line 80
                echo "                    ";
                if (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "type") == "boolean")) {
                    // line 81
                    echo "                        ";
                    $context["value"] = (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "value")) ? ("true") : ("false"));
                    // line 82
                    echo "                    ";
                } elseif (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "type") == "string")) {
                    // line 83
                    echo "                        ";
                    $context["maxStrLength"] = 40;
                    // line 84
                    echo "                        ";
                    $context["value"] = $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "value");
                    // line 85
                    echo "                        ";
                    if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) > (isset($context["maxStrLength"]) ? $context["maxStrLength"] : $this->getContext($context, "maxStrLength")))) {
                        // line 86
                        echo "                            ";
                        $context["value"] = (twig_slice($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 0, (isset($context["maxStrLength"]) ? $context["maxStrLength"] : $this->getContext($context, "maxStrLength"))) . "…");
                        // line 87
                        echo "                        ";
                    }
                    // line 88
                    echo "                        ";
                    $context["value"] = (("\"" . (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) . "\"");
                    // line 89
                    echo "                    ";
                } else {
                    // line 90
                    echo "                        ";
                    $context["value"] = $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "value");
                    // line 91
                    echo "                    ";
                }
                // line 92
                echo "                    <code>
                        ";
                // line 93
                echo twig_escape_filter($this->env, (isset($context["parameter"]) ? $context["parameter"] : $this->getContext($context, "parameter")), "html", null, true);
                echo ": <em style=\"color: #aaa\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "type"), "html", null, true);
                echo "</em>
                        <span style=\"color: #009E00\">";
                // line 94
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</span>
                    </code>
                    ";
                // line 96
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo "<br />";
                }
                // line 97
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['parameter'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 98
            echo "            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 101
        echo "    </table>
    <br />
    <h2>Twig Extensions</h2>
    <table>
        <tr>
            <th>Extension</th>
            <th>Class</th>
        </tr>
        ";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "extensions"));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 110
            echo "            <tr>
                <th>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : $this->getContext($context, "extension")), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : $this->getContext($context, "extension")), "class"), "html", null, true);
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 115
        echo "    </table>

    <h2>Twig Tests available</h2>
    <table>
        <tr>
            <th>Test</th>
            <th>Call</th>
            <th>Extension</th>
        </tr>
        ";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tests"));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 125
            echo "            <tr>
                <th>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "call"), "html", null, true);
            echo "</code></td>
                <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "extension"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 131
        echo "    </table>

    <h2>Twig Filters available</h2>
    <table>
        <tr>
            <th>Filter</th>
            <th>Call</th>
            <th>Extension</th>
        </tr>
        ";
        // line 140
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "filters"));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 141
            echo "            <tr>
                <th>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "call"), "html", null, true);
            echo "</code></td>
                <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "extension"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 147
        echo "    </table>

    <h2>Twig Functions available</h2>
    <table>
        <tr>
            <th>Function</th>
            <th>Call</th>
            <th>Extension</th>
        </tr>
        ";
        // line 156
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "functions"));
        foreach ($context['_seq'] as $context["_key"] => $context["function"]) {
            // line 157
            echo "            <tr>
                <th>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["function"]) ? $context["function"] : $this->getContext($context, "function")), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["function"]) ? $context["function"] : $this->getContext($context, "function")), "call"), "html", null, true);
            echo "</code></td>
                <td>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["function"]) ? $context["function"] : $this->getContext($context, "function")), "extension"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['function'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 163
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerExtraBundle:Collector:twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 163,  410 => 160,  406 => 159,  399 => 157,  395 => 156,  375 => 144,  371 => 143,  364 => 141,  340 => 128,  325 => 124,  301 => 111,  276 => 98,  262 => 97,  253 => 94,  238 => 90,  226 => 86,  152 => 61,  77 => 22,  150 => 58,  137 => 55,  65 => 17,  233 => 86,  217 => 83,  211 => 81,  105 => 42,  195 => 74,  127 => 48,  94 => 36,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 158,  398 => 129,  393 => 126,  387 => 122,  384 => 147,  381 => 120,  379 => 119,  368 => 112,  365 => 111,  362 => 110,  355 => 106,  314 => 115,  294 => 109,  268 => 85,  264 => 84,  252 => 80,  247 => 93,  241 => 91,  220 => 84,  214 => 82,  208 => 80,  177 => 68,  169 => 65,  128 => 49,  71 => 20,  114 => 42,  78 => 21,  203 => 78,  182 => 69,  176 => 64,  173 => 67,  149 => 60,  144 => 53,  133 => 51,  99 => 33,  95 => 34,  57 => 15,  34 => 5,  31 => 4,  796 => 475,  793 => 474,  782 => 472,  778 => 471,  774 => 469,  761 => 468,  735 => 463,  732 => 462,  713 => 460,  696 => 459,  692 => 457,  688 => 456,  684 => 455,  680 => 454,  676 => 453,  672 => 452,  668 => 451,  665 => 450,  663 => 449,  646 => 448,  635 => 447,  620 => 442,  615 => 440,  611 => 439,  608 => 438,  606 => 437,  592 => 436,  555 => 401,  537 => 398,  520 => 397,  517 => 396,  515 => 395,  510 => 393,  505 => 391,  201 => 94,  181 => 75,  170 => 71,  163 => 82,  160 => 67,  153 => 77,  141 => 55,  90 => 33,  84 => 31,  68 => 30,  62 => 19,  28 => 3,  332 => 126,  321 => 112,  318 => 111,  315 => 110,  312 => 98,  309 => 97,  300 => 105,  297 => 104,  291 => 102,  288 => 101,  283 => 88,  274 => 97,  258 => 96,  243 => 92,  235 => 89,  224 => 71,  202 => 77,  156 => 62,  136 => 71,  122 => 45,  119 => 44,  112 => 43,  109 => 42,  85 => 25,  58 => 25,  44 => 10,  178 => 87,  175 => 72,  154 => 54,  134 => 51,  125 => 48,  121 => 45,  118 => 48,  113 => 41,  102 => 40,  87 => 32,  49 => 14,  46 => 7,  27 => 3,  91 => 35,  63 => 18,  45 => 8,  385 => 160,  382 => 159,  376 => 158,  374 => 116,  367 => 142,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  349 => 131,  341 => 105,  336 => 127,  330 => 141,  324 => 113,  322 => 101,  317 => 135,  311 => 131,  308 => 130,  305 => 112,  303 => 106,  298 => 110,  289 => 120,  286 => 119,  284 => 101,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  251 => 101,  244 => 92,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 85,  212 => 78,  209 => 82,  206 => 77,  204 => 95,  193 => 73,  190 => 76,  187 => 77,  185 => 75,  180 => 63,  174 => 65,  171 => 61,  168 => 70,  166 => 68,  159 => 53,  151 => 60,  148 => 46,  143 => 56,  140 => 54,  130 => 49,  116 => 36,  107 => 42,  103 => 37,  97 => 37,  88 => 25,  82 => 22,  79 => 21,  76 => 26,  73 => 19,  70 => 20,  67 => 15,  61 => 19,  47 => 11,  39 => 6,  36 => 5,  246 => 32,  164 => 68,  162 => 66,  157 => 56,  145 => 74,  139 => 50,  131 => 51,  115 => 39,  108 => 37,  106 => 37,  101 => 41,  98 => 38,  96 => 37,  92 => 29,  80 => 23,  74 => 22,  64 => 20,  55 => 16,  52 => 13,  50 => 10,  43 => 12,  41 => 9,  32 => 4,  29 => 3,  360 => 140,  351 => 150,  347 => 163,  344 => 119,  339 => 146,  337 => 103,  329 => 125,  327 => 114,  320 => 149,  313 => 145,  306 => 107,  299 => 137,  292 => 121,  285 => 89,  278 => 86,  263 => 95,  256 => 109,  249 => 138,  242 => 96,  232 => 88,  229 => 87,  221 => 86,  218 => 83,  213 => 82,  210 => 81,  205 => 79,  199 => 76,  191 => 79,  189 => 72,  179 => 72,  172 => 64,  165 => 60,  161 => 63,  158 => 80,  155 => 61,  147 => 58,  142 => 51,  138 => 50,  135 => 47,  132 => 51,  126 => 45,  123 => 61,  120 => 40,  117 => 39,  111 => 44,  104 => 41,  100 => 39,  93 => 28,  89 => 29,  86 => 25,  83 => 30,  75 => 23,  72 => 24,  69 => 22,  66 => 20,  60 => 16,  54 => 14,  51 => 10,  48 => 12,  42 => 7,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
