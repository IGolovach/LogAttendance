<?php

/* install/install-step1-result.html */
class __TwigTemplate_480f438f2ae7353d347e02b157127342 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            '_tmp66434' => array($this, 'block__tmp66434'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("install/install-base.html");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block__tmp66434($context, array $blocks = array())
    {
        // line 20
        echo (isset($context['confFileContent']) ? $context['confFileContent'] : null);
        echo "
";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo "<form action=\"index.php\" method=\"post\">
<input type=\"hidden\" name=\"step\" value=\"1\" />
<input type=\"hidden\" name=\"action\" value=\"next\" />
<table align=\"center\">
  <tr>
    <td><span class=\"resultText\">";
        // line 9
        echo (isset($context['resultText']) ? $context['resultText'] : null);
        echo "</span></td>
  </tr>
";
        // line 11
        if ((isset($context['confFileContent']) ? $context['confFileContent'] : null)) {
            echo "  <tr>
    <td>Содержимое файла конфигуции:</td>
  </tr>
  <tr>
    <td>
    <hr />
    <pre>
";
            // line 19
            ob_start();
            $this->getBlock('_tmp66434', $context, $blocks);
            $context['_tmp66434'] = ob_get_clean();
            echo twig_escape_filter($this->env, (isset($context['_tmp66434']) ? $context['_tmp66434'] : null));
            // line 21
            echo "    <hr />
    </pre>
    </td>
  </tr>
";
        }
        // line 26
        echo "  <tr>
    <td><br /></td>
  </tr>
  <tr>
    <td  align=\"center\">
      <input type=\"submit\" value=\"Далее\" />
    </td>
  </tr>
</table>
</form>
";
    }

}
