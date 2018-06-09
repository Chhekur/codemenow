/* 
* @author Niklas von Hertzen <niklas at hertzen.com>
* @created 10.7.2012 
* @website http://hertzen.com
 */



PHP.Modules.prototype.each = function( array ) {
    var COMPILER = PHP.Compiler.prototype,
    VARIABLE = PHP.VM.Variable.prototype,
    ARRAY = PHP.VM.Array.prototype,
    item = PHP.VM.Array.arrayItem;
        
    if ( array [ VARIABLE.TYPE ] === VARIABLE.ARRAY ) {
       
       var pointer = array[ COMPILER.VARIABLE_VALUE ][ PHP.VM.Class.PROPERTY + ARRAY.POINTER],
        values = array[ COMPILER.VARIABLE_VALUE ][ PHP.VM.Class.PROPERTY + ARRAY.VALUES ][ COMPILER.VARIABLE_VALUE ];
        
        if ( pointer[ COMPILER.VARIABLE_VALUE ] >= values.length ) {
            return new PHP.VM.Variable( false );
        }
       
        var value = this.current( array ),
        key = this.key( array );
        
        this.next( array );
        
        return this.array( [ item( 0, key ), item( 1, value ) ] );
        
       
    } 
    
    
};