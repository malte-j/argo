<h1 align="center">Argo, the WordPress Theme for <a href="https://spacifik.de" rel="noopener">Spacifik.de</a></h1>

 ![spacifik_preview_4](https://user-images.githubusercontent.com/12611076/103476486-7fe47f80-4db6-11eb-8647-93fe795ee5e2.gif)

<h2 align="center">Developed from the ground up and packed full with features, including:</h2>

:package:  SASS and JS bundling using webpack

:whale:  Docker environment for local development

:dash:  [Lottie](https://airbnb.design/lottie/) animation support for tiny and incredibly performant animations

:fire:  Hot reload across multiple devices using webpack and browsersync

:anchor:  plugin synchronization through docker mount

:envelope:  contact form utilizing AWS Lambda

:arrows_clockwise:  CI & CD using GitHub actions

:iphone:  JS library for syncing Lottie animations to scroll


<h2 align="center">Setting up Argo</h2>

The following assumes that you've already installed docker and node on your local machine.

First you setup docker, for that you just need to execute `docker-compose up`. This starts a WordPress instance on port 8000. You can already configure it if you want, but the theme won't yet show up.

After that, you need to install your node dependencies. Navigate to `themes/argo` and run `npm i`. Then you can build the theme for the first time. Using `npm run watch` you can start the development server, or just run `npm run pack` to build it once. Now the theme should show up as available in your WordPress install.


<h2 align="center">Using Argo</h2>

Once you've set the theme up once, you can use the `start.sh`and `stop.sh` scripts in the root folder to start and stop docker and the live server more easily.

If you want to generate a zip file for uploading it to a different WordPress instance, you can run `npm run build` in the `themes/argo` folder. This will build the theme and generate an `argo.zip` file in the root folder.

<h2 align="center">Working with CI/CD (Contributors only)</h2>

All releases will be built by GitHub actions, the generated zip files are available in the [releases](https://github.com/SkyGuardian42/argo/releases) section.

Workflow for releasing a new version of Argo:

| Step | Command | Result
| :-:|---|---
| 1. | ```git add .``` | Add files to commit
| 2. | ```git commit -m "message for commit"``` | Commit files
| 3. | ```git tag v1.0.0 -m "message for tag"``` | Tag version
| 4. | ```git push --follow-tags``` | Push commit along with tags
