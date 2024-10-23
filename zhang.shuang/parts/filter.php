<div class="container display-flex">
	<nav class="flex-stretch nav">		
	    <script>
        	const makeNav = (classes = '') => {
            const links = ['Camera', 'Lens', 'Tripod', 'Bags', 'Accessory'];
            let ran = Math.floor(Math.random() * links.length);
            document.write(`
            <div>
                <nav class="${classes}">
                    <ul>
                        ${links.reduce((r, o, i) => {
                            return r+`<li class="${ran==i?'active':''}"><a href="#">${o}</a></li>`;
                        }, '')}
                    </ul>
                </nav>
            </div>
            `);
        	}
    	</script>

    	<script>makeNav('nav nav-material')</script>

    	<script>
			$("#navigations a").on("click",function(e){
            	e.preventDefault();
            	$(this).closest("li").addClass("active")
            	.siblings().removeClass("active")
        	})
		</script>
    </nav>
</div>