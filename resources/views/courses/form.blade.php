            <div class="form-group">
                {!! Form::label('title', 'Course Title:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('thumbnail', 'Course Thumbnail:' ) !!}
                {!! Form::file('thumbnail', array('class' => 'form-control', 'accept'=> 'image/*')) !!}
                @if (isset($course))
                    <img class="card-img-top" style="width: 90px; height: 90px;" src="{{asset( $course['thumbnail']) }}" alt={{$course->thumbnail}}> 
                @endif
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Course Description: ') !!}
                {!! Form::textarea('description', null, array('class' => 'form-control')) !!}
            </div>
            {!! Form::submit($submitbuttontext, ['class' => 'btn']) !!}
            {!! Form::close() !!}
