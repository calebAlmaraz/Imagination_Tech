<?php

namespace App\Controller\Exercises;

/**
 * @Annotation
 * @Target({"METHOD","PROPERTY"})
 * @Attributes({
 *   @Attribute("var1", type = "string"),
 *   @Attribute("var2",  type = "string"),
 *   @Attribute("var3",  type = "string"),
 * })
 */
class Data_Structures {
    
    /* --- Variables declaration --- */
    public string $var1 = "Public variable";
    protected string $var2 = "Protected variable";
    private string $var3 = "Private variable";

    public function __construct(string $var1, string $var2, string $var3) {
        $this->var1 = $var1;
        $this->var2 = $var2;
        $this->var3 = $var3;
    }

    public function get_variables(){
        return (array) $this;
    }

}