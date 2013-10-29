 <?php
/**
 * The News Model does the back-end heavy lifting for the News Controller
 */
class News_Model
{
    /**
     * Array of articles. Array keys are titles, array values are corresponding
     * articles.
     */
    private $db;

    public function __construct()
    {
    	$this->db = new MysqlImproved_Driver;
    }

    /**
     * Fetches article based on supplied name
     * 
     * @param string $articleName
     * 
     * @return array $article
     */
    public function get_article($articleName)
    {
        //connect to database
        $this->db->connect();
    
    	//sanitize data
    	$author = $this->db->escape($author);                            
    	
        //prepare query
        $this->db->prepare
        (
            "
            SELECT
                `date`,
                `title`,
                `content`,
                `author`
            FROM
                `articles`
            WHERE
                `author` = '$author'
            LIMIT
                1
            ;
            "
        );
    
        //execute query
        $this->db->query();
    
        $article = $this->db->fetch('array');
    
        return $article;
    }

} 