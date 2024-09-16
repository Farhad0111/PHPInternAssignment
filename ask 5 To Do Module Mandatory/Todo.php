class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'completed'];
}
