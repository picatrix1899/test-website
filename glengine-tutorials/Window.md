# Window

## Introduction

The window is an wrapped object from glfw. It represents an interface for interaction with the visible Windows 10 window. The window is obviously needed for rendering GL content but also for
input management like mouse inputs, keyboard inputs or even joystick inputs. It is completly possible to have multiple windows at once. Either in a single Thread or seperated in multiple Threads and also
with shared GL resources or with seperated ones.

In the older GL systems it was the general idea to "poll" everything like for example polling the currently pressed keys. Nowadays glfw provides callbacks via functional interfaces (for convenient use
with java lambda-expressions). These callbacks are usually at least "kinda" in snyc with the window thread.

## The Window Class

The window class I will use for the moment is designed for multi window and shared resources support. First of all we need the base it will look like the following code. Don't worry I will go into detail
in just a moment.

```java
/* Window.java */

public class Window
{

  private long id;
  private long parentId;

  private String title;
  private int width;
  private int height;

  public Window(String title, int width, int height, long parentId)
  {
    this.title = title;
    this.width = width;
    this.height = height;
    this.parentId = parentId;
  }

  public String getTitle() { return this.title; }
  public int getWidth() { return this.width; }
  public int getHeight() { return this.height; }
  public long getId() { return this.id; }

  public void init()
  {

  }

  public void render(double delta)
  {

  }

  public void update(double delta)
  {

  }

  public void release()
  {

  }
}
```

I think most is straight forward. `title`, `width` and `height` do exactly what you think the do. `title` sets the text that is displayed in the top border of the window. `width` and `height`
set the initial size of the window. The `parentId` is the window "handle" from the window which GL resources should be used from. This can also be "0" for a completly new so called "Context".

Now to the methods. The method `init()` is called before the actual engine loop starts. In this method everything that is needed for the window should be set up. here we create the window itself for example.

The method `update(double delta)` is called whenever the engine loop decides to do an update. In here we tell the window to gather all "Events" that has happend in the meantime and trigger the
corresponding callbacks. Some might wonder what the secret of the `double delta` is. I tell you this is not used right now especially not in the window class. This is just here due to the fact, that it is
a renderable and updatable game component. And all of these should have the same methods. It's also possible to implement an interface for game components for a more abstract interaction with them. The delta itself is you for so called "fixed Timestep". You may find a tutorial on this here in the future.

The method `render(double delta)` is called whenever the engine loop decides to render a frame. In here we tell the Window to show a single Frame. The window has a concept to rendering. Whenever you render with opengl to a window you actually render to one of two "framebuffers". The other one still contains the previously rendered frame. This means that the last frame is rendered till the next frame is finished and is ready to be displayed. Swap Buffers"

The method `release` is used to release any allocated resources from the window and it's own context but NOT from the parent context. This is neccessary to prevent memory leaks and dead allocated memory.
