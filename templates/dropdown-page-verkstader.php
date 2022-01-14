
<div class="verkstaderContainer">
    <div class="col1">
        
        <div class="dropdown cityDropdown">
        <button class="dropbtn">Välj ort <i class="fas fa-sort-down" style="font-size: 1.2rem; margin-left: 3.6em;"></i> </button>
    
            <div class="dropdown-content">

            <?php $terms = get_terms('ort');  
            foreach ($terms as $term) {
        
            echo '<a href="'.get_term_link($term->slug, 'ort').'">'.$term->name.'</a>';

            } ?>

            </div>
        
        </div>
</div>
    
    
    <div class="col2"> 

    </div>
</div>